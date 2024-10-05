<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;

class Pages extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        $beritaModel = new BeritaModel();
        $limit = 3;

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);
        $data['beritaBaru'] = $beritaModel->where('status', 'publish')->orderBy('created_at', 'DESC')->findAll($limit);

        return view('beranda', $data);
    }

    public function kegiatan()
    {
        return view('kegiatan');
    }

    public function galeri()
    {
        return view('galeri');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
