<?php 

# app/Controllers/UserController.php
namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index($page = 'Tabel User')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();
		$data['users'] = $model->findAll();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        return view('dashboard/user/index', $data);
    }

    public function create($page = 'Tambah User')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        return view('dashboard/user/create', $data);
    }

    public function store()
    {
        $model = new UserModel();

        $password = $this->request->getPost('password');
        $confirmPassword = $this->request->getPost('confirmPassword');

        if ($password !== $confirmPassword) {
            // Password dan konfirmasi password tidak cocok
            return redirect()->back()->withInput()->with('error', 'Password dengan Konfirmasi Password tidak sama.');
        }

        $data = [
            'name'     => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            'role'     => $this->request->getPost('role'),
            'password' => md5($password),
        ];

        $model->insert($data);
        return redirect()->to('/admin/user');
    }

    public function edit($id, $page = 'Edit Data User')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();
        // $data['user'] = $model->find($id);

        // $session = session();
        // $id = $session->get('user_id'); 

        $data['user'] = $model->find($id);

        return view('dashboard/user/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $data = [
            'name'     => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username'),
            // 'password' => md5($this->request->getPost('password')),
        ];

        // Cek apakah kolom password diisi
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = md5($password); // Hash password dengan MD5
        }

        $model->update($id, $data);
        return redirect()->to('/admin/user');
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);

        return redirect()->to('/admin/user');
    }

    public function profile($page = 'Profil User')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        echo view('dashboard/user/profil', $data);
    }

    public function updateProfile()
    {
        $model = new UserModel();

        $session = session();
        $id = $session->get('user_id'); // Pastikan sesi menyimpan user_id

        $data = [
            'name' => $this->request->getPost('nama'),
            'username' => $this->request->getPost('username')
        ];

        // Cek apakah kolom password diisi
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $data['password'] = md5($password); // Hash password dengan MD5
        }

        $model->update($id, $data);

        return redirect()->to('/admin/user/profile')->with('success', 'Profile updated successfully');
    }
}
