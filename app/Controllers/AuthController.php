<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function login()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            // Verifikasi password menggunakan MD5
            if ($user['password'] === md5($password)) {
                $session->set([
                    'user_id' => $user['id'],
                    'username' => $user['username'],
                    'name' => $user['name'],
                    'role' => $user['role'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/admin'); // Redirect ke halaman dashboard jika login berhasil
            } else {
                // Tampilkan pesan error jika password salah
                // return redirect()->back()->withInput()->with('error', 'Password salah');
                $error = 'Password Tidak Sesuai';
                echo view('login', ['error' => $error]);
            }
        } else {
            // Tampilkan pesan error jika username tidak ditemukan
            // return redirect()->back()->withInput()->with('error', 'Username tidak ditemukan');
            $error = 'Username Tidak Ditemukan';
            echo view('login', ['error' => $error]);
        }
        
    }

    // Metode logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login'); // Redirect ke halaman login setelah logout
    }
}
