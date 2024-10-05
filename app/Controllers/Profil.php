<?php

namespace App\Controllers;
use App\Models\SettingsModel;
use App\Models\UserModel;

class Profil extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        
        $setting = new SettingsModel();
        $data['info'] = $setting->findAll();

        $session = session();
        $idUser = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $userModel->find($idUser);

        return view('profil', $data);
    }
}
