<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        if (!session()->has('isLoggedIn')) {
            return redirect()->to(site_url('login'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        $today = date('Y-m-d');
$diskonModel = new \App\Models\DiskonModel();
$diskon = $diskonModel->where('tanggal', $today)->first();

if ($diskon) {
    session()->set('diskon_nominal', $diskon['nominal']);
}
    }
}
