<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SettingsModel;

class SettingsController extends BaseController
{
    public function index($page = 'Pengaturan Info')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();
        $settingModel = new SettingsModel();
        
		$data['users'] = $model->findAll();
        $data['settings'] = $settingModel->findAll();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        return view('dashboard/settings', $data);
    }

    public function update()
    {
        $model = new SettingsModel();

        $data = [
            'nama_sekolah' => $this->request->getPost('nama_sekolah'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email' => $this->request->getPost('email'),
            'alamat' => $this->request->getPost('alamat'),
        ];

        $model->update($data);
        return redirect()->to('dashboard/settings')->with('success', 'Data Sekolah berhasil diperbarui.');
    }
}
