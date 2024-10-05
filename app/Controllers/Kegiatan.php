<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;
use App\Models\SettingsModel;

class Kegiatan extends BaseController
{
    public function index()
    {
        $model = new UserModel();
		$data['users'] = $model->findAll();

        $beritaModel = new BeritaModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $setting = new SettingsModel();

        $data['user'] = $model->find($idUser);
        $data['listBerita'] = $beritaModel->where('status', 'publish')->orderBy('created_at', 'DESC')->findAll();
        $data['info'] = $setting->findAll();

        return view('kegiatan', $data);
    }

    public function konten()
    {
        return view('konten');
    }

    public function detail($slug)
    {
        $model = new UserModel();
		$data['users'] = $model->findAll();

        $beritaModel = new BeritaModel();
        $news = $beritaModel->where('slug', $slug)->first();

        $setting = new SettingsModel();

        if (!$news) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita tidak ditemukan: ' . $slug);
        }
        
        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($idUser);
        $data['news'] = $news;
        $data['info'] = $setting->findAll();
        $data['relatedNews'] = $beritaModel->getLatestPublishedNewsExcluding($slug, 3);

        return view('konten', $data);
    }
}
