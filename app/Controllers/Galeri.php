<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;
use App\Models\GalleryModel;
use App\Models\SettingsModel;

class Galeri extends BaseController
{
    public function index()
    {
        $galeriModel = new GalleryModel();
        $userModel = new UserModel();
        $setting = new SettingsModel();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);
        $data['galeri'] = $galeriModel->findAll();
        $data['info'] = $setting->findAll();

        return view('/galeri', $data);
    }

}
