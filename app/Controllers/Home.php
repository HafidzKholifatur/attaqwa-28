<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;
use App\Models\SettingsModel;

class Home extends BaseController
{
    public function index(): string
    {
		$model = new UserModel();
		$data['users'] = $model->findAll();

        $beritaModel = new BeritaModel();
        $limit = 3;

        $setting = new SettingsModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($idUser);
        $data['beritaBaru'] = $beritaModel->where('status', 'publish')->orderBy('created_at', 'DESC')->findAll($limit);
        $data['info'] = $setting->findAll();

        return view('beranda', $data);
    }
}
