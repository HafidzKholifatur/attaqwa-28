<?php

namespace App\Controllers;

use App\Models\KontakModel;
use CodeIgniter\Controller;
use App\Models\SettingsModel;
use App\Models\UserModel;

class ContactController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();

        $setting = new SettingsModel();
        $data['info'] = $setting->findAll();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        return view('kontak', $data);
    }

    public function send()
    {
        helper(['form', 'url']);

        $validation = \Config\Services::validation();

        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('kontak', [
                'validation' => $validation,
            ]);
        } else {
            $contactModel = new KontakModel();

            $data = [
                'name' => $this->request->getPost('name'),
                'email' => $this->request->getPost('email'),
                'subject' => $this->request->getPost('subject'),
                'message' => $this->request->getPost('message')
            ];

            $contactModel->save($data);

            return redirect()->to('/kontak')->with('success', 'Pesanmu Telah Berhasil Dikirim');
        }
    }

    public function table($page = 'Tabel Pesan')
    {
        $data['title'] = ucfirst($page);

        $contactModel = new KontakModel();
        $data['pesan'] = $contactModel->findAll();

        $userModel = new UserModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        return view('/dashboard/pesan', $data);
    }
}
