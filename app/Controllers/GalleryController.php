<?php

namespace App\Controllers;

use App\Models\GalleryModel;
use App\Models\UserModel;

class GalleryController extends BaseController
{
    public function index($page = 'Tabel Galeri')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->findAll();

        return view('/dashboard/gallery/index', $data);
    }

    public function create($page = 'Tambah Galeri')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        return view('/dashboard/gallery/create', $data);
    }

    public function store()
    {
        $galleryModel = new GalleryModel();

        $image = $this->request->getFile('image');
        $desc = $this->request->getPost('desc');

        $imageName = $image->getRandomName();
        $image->move('uploads', $imageName);

        $data = [
            'image' => $imageName,
            'desc' => $desc
        ];

        $galleryModel->insert($data);

        return redirect()->to('/admin/gallery');
    }

    public function edit($id, $page = 'Edit Foto Galeri')
    {
        $data['title'] = ucfirst($page);
        
        $model = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($idUser);

        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->find($id);

        return view('/dashboard/gallery/edit', $data);
    }

    public function update($id)
    {
        $galleryModel = new GalleryModel();

        $desc = $this->request->getPost('desc');

        $data = [
            'desc' => $desc
        ];

        if ($image = $this->request->getFile('image')) {
            if ($image->isValid() && ! $image->hasMoved()) {
                // Delete old image
                $oldImage = $galleryModel->find($id)['image'];
                if (file_exists("uploads/" . $oldImage)) {
                    unlink("uploads/" . $oldImage);
                }
                
                // Move new image
                $imageName = $image->getRandomName();
                $image->move('uploads', $imageName);
                $data['image'] = $imageName;
            }
        }

        $galleryModel->update($id, $data);

        return redirect()->to('/admin/gallery');
    }

    public function delete($id)
    {
        $galleryModel = new GalleryModel();
        $gallery = $galleryModel->find($id);
        
        if ($gallery) {
            $imageName = $gallery['image'];
            if (file_exists("uploads/" . $imageName)) {
                unlink("uploads/" . $imageName);
            }
            $galleryModel->delete($id);
        }

        return redirect()->to('/admin/gallery');
    }
}
