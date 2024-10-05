<?php

namespace App\Controllers;

use App\Models\KontakModel;
use CodeIgniter\Controller;

class KontakController extends Controller
{
    protected $kontakModel;

    public function __construct()
    {
        $this->kontakModel = new KontakModel();
    }

    public function index()
    {
        return view('kontak');
    }

    public function tabel()
    {
        $data['kontaks'] = $this->kontakModel->findAll();
        return view('kontak/index', $data);
    }

    public function create()
    {
        return view('kontak/create');
    }

    public function send()
    {
        // Ambil request dari form
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        // Validasi input
        // $validation = \Config\Services::validation();
        // $validation->setRules([
        //     'name' => 'required',
        //     'email' => 'required|valid_email',
        //     'subject' => 'required',
        //     'message' => 'required'
        // ]);

        // if (!$validation->withRequest($this->request)->run()) {
        //     return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        // }

        // Simpan ke database
        $contactModel = new KontakModel();
        $contactModel->save([
            'name' => $name,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ]);

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }

    public function edit($id)
    {
        $data['kontak'] = $this->kontakModel->find($id);
        return view('kontak/edit', $data);
    }
    
    public function submit2()
    {
        $contactModel = new KontakModel();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $subject = $this->request->getPost('subject');
        $message = $this->request->getPost('message');

        $data = [
            'name'    => $name,
            'email'   => $email,
            'subject' => $subject,
            'message' => $message,
        ];

        $contactModel->insert($data);

        return redirect()->back()->with('success', 'Pesanmu Berhasil Dikirim.');
    }
}
