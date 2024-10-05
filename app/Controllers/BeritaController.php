<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class BeritaController extends Controller
{
    public function index($page = 'Tabel Semua Berita')
    {
        $data['title'] = ucfirst($page);

        $model = new BeritaModel();
        $data['berita'] = $model->findAll();

        $userModel = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);
        
        return view('/dashboard/berita/index', $data);
    }

    public function published($page = 'Tabel Berita Publish')
    {
        $data['title'] = ucfirst($page);

        $model = new BeritaModel();

        $userModel = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        $data['berita'] = $model->where('status', 'publish')->findAll();
        return view('/dashboard/berita/publish', $data);
    }

    public function draft($page = 'Tabel Berita Draft')
    {
        $data['title'] = ucfirst($page);

        $model = new BeritaModel();

        $userModel = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        $data['berita'] = $model->where('status', 'draft')->findAll();
        return view('/dashboard/berita/draft', $data);
    }

    public function create($page = 'Tambah Berita')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id');

        $data['user'] = $model->find($id);

        return view('/dashboard/berita/create', $data);
    }

    public function store()
    {
        $model = new BeritaModel();

        // Handle thumbnail upload
        $thumbnail = $this->request->getFile('thumbnail');
        $thumbnailName = $thumbnail->getRandomName();
        $thumbnail->move('uploads/thumbnail', $thumbnailName);

        $slug = url_title($this->request->getPost('title'), '-', true);

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
            'slug' => $slug,
            'thumbnail' => $thumbnailName,
            'summary' => $this->request->getPost('summary')
        ];

        $model->insert($data);

        return redirect()->to('/admin/berita');
    }

    public function edit($id, $page = 'Edit Berita')
    {
        $data['title'] = ucfirst($page);
        
        $model = new BeritaModel();
        $data['berita'] = $model->find($id);

        $userModel = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        return view('/dashboard/berita/edit', $data);
    }

    public function update($id)
    {
        $model = new BeritaModel();

        // Handle thumbnail upload
        $thumbnail = $this->request->getFile('thumbnail');
        $thumb = []; // Initialize the array to hold thumbnail info

        if ($thumbnail && $thumbnail->isValid() && !$thumbnail->hasMoved()) {
            // Find and delete the old thumbnail
            $oldThumbnail = $model->find($id)['thumbnail'];
            if ($oldThumbnail && file_exists("uploads/thumbnail/" . $oldThumbnail)) {
                unlink("uploads/thumbnail/" . $oldThumbnail);
            }

            // Move the new thumbnail
            $thumbnailName = $thumbnail->getRandomName();
            $thumbnail->move('uploads/thumbnail', $thumbnailName);
            $thumb['thumbnail'] = $thumbnailName;
        }

        $slug = url_title($this->request->getPost('title'), '-', true);

        // Update the database with new data, including the thumbnail if it was uploaded
        $updateData = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
            'status' => $this->request->getPost('status'),
            'slug' => $slug,
            'summary' => $this->request->getPost('summary')
        ];

        if (!empty($thumb)) {
            $updateData = array_merge($updateData, $thumb);
        }

        $model->update($id, $updateData);

        return redirect()->to('/admin/berita');
    }


    public function delete($id)
    {
        $model = new BeritaModel();
        $model->delete($id);

        return redirect()->to('/admin/berita');
    }

    public function statistics()
    {
        $model = new BeritaModel();

        // Query to get count of news per month
        $query = $model->select('MONTH(created_at) as month, COUNT(id) as count')
                       ->groupBy('MONTH(created_at)')
                       ->orderBy('MONTH(created_at)')
                       ->findAll();

        // Prepare data for chart
        $beritaData = [];
        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
        ];

        // Initialize counts for all months to 0
        foreach ($months as $num => $name) {
            $beritaData[$name] = 0;
        }

        // Populate the counts
        foreach ($query as $data) {
            $beritaData[$months[$data['month']]] = $data['count'];
        }

        $data = [
            'beritaData' => $beritaData
        ];

        return view('dashboard/berita/statistics', $data);
    }

    public function uploadImage()
    {
        if ($this->request->getFile('file')) {
            $dataFile = $this->request->getFile('file');
            $fileName = $dataFile->getRandomName();
            $dataFile->move("uploads/berkas/", $fileName);
            $fileUrl = base_url("uploads/berkas/$fileName");

            // Return the URL in JSON format
            return $this->response->setJSON(['url' => $fileUrl]);
        }
    }

    function deleteImage()
    {
        $src = $this->request->getPost('src');
        $filePath = FCPATH . 'uploads/berkas/' . basename($src);

        if (file_exists($filePath)) {
            unlink($filePath);
            $response['message'] = 'File deleted successfully.';
        } else {
            $response['error'] = 'File not found.';
        }

        // return $this->response->setJSON($response);
        // $src = $this->request->getVar('src');
        // //--> uploads/berkas/1630368882_e4a62568c1b50887a8a5.png

        // //https://localhost/ci4summernote/public
        // if ($src) {
        //     $file_name = str_replace(base_url() . "/", "", $src);
        //     if (unlink($file_name)) {
        //         echo "Delete file berhasil";
        //     }
        // }
    }

}
