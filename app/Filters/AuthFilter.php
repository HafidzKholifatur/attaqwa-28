<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        // if(!session('id')){
        //     return redirect()->to(site_url('login'));
        // }

        // Dapatkan instance session
        $session = session();

        // Periksa apakah pengguna sudah login
        if (!$session->get('isLoggedIn')) {
            // Jika pengguna belum login, redirect ke halaman login
            return redirect()->to('/login');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}