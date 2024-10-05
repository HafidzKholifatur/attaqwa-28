<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeritaModel;

class Dashboard extends BaseController
{
    public function index($page = 'Dashboard')
    {      
        // Model User
        $model = new UserModel();
        $users = $model->findAll();
        $totalUser = $model->getTotalUser(); 

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        // Statistik Berita Masuk
        $modelBerita = new BeritaModel();
        $berita = $modelBerita->findAll();

        // Counting Berita
        $totalBerita = $modelBerita->getTotalBerita();
        $totalPublished = $modelBerita->getTotalPublished();
        $totalDraft = $modelBerita->getTotalDraft();

        // Query to get count of news per month
        $query = $modelBerita->select('MONTH(created_at) as month, COUNT(id) as count')
                       ->groupBy('MONTH(created_at)')
                       ->orderBy('MONTH(created_at)')
                       ->findAll();

        // Prepare data for chart
        $beritaData = [];
        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
        ];

        // Initialize counts for all months to 0
        foreach ($months as $num => $name) {
            $beritaData[$name] = 0;
        }

        // Populate the counts
        foreach ($query as $data) {
            $beritaData[$months[$data['month']]] = $data['count'];
        }

        // Data
        $data = [
            'beritaData'        => $beritaData,
            'users'             => $users,
            'berita'            => $berita,
            'totalBerita'       => $totalBerita,
            'totalPublished'    => $totalPublished,
            'totalDraft'        => $totalDraft,
            'totalUser'         => $totalUser
        ];
        
        $data['user'] = $model->find($id);
        $data['title'] = ucfirst($page);

        // $data['users'] = $model->findAll();

        return view('dashboard/index', $data);
    }

    // public function user()
    // {
    //     $model = new UserModel();
	// 	$data['users'] = $model->findAll();

    //     return view('dashboard/user', $data);
    // }

    public function settings($page = 'Pengaturan')
    {
        $data['title'] = ucfirst($page);

        $model = new UserModel();
		$data['users'] = $model->findAll();

        $session = session();
        $id = $session->get('user_id'); // Sesi menyimpan id

        $data['user'] = $model->find($id);

        return view('dashboard/settings', $data);
    }

    public function statistics($page = 'Dashboard')
    {
        $data['title'] = ucfirst($page);

        $modelBerita = new BeritaModel();

        // Query to get count of news per month
        $query = $modelBerita->select('MONTH(created_at) as month, COUNT(id) as count')
                       ->groupBy('MONTH(created_at)')
                       ->orderBy('MONTH(created_at)')
                       ->findAll();

        // Prepare data for chart
        $beritaData = [];
        $months = [
            1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April',
            5 => 'May', 6 => 'June', 7 => 'July', 8 => 'August',
            9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'
        ];

        // Initialize counts for all months to 0
        foreach ($months as $num => $name) {
            $beritaData[$name] = 0;
        }

        // Populate the counts
        foreach ($query as $data) {
            $beritaData[$months[$data['month']]] = $data['count'];
        }

        $data = [
            'beritaData' => $beritaData
        ];

        return view('dashboard/berita/statistics', $data);
    }
}
