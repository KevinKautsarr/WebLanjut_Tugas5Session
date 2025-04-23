<?php
//Controler
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponsableInterface;

class AuthController extends BaseController
{
    // fungsi __construct() untuk memanggil helper dari CodeIgniter
    function __construct()
{
    helper('form');
}
    // fungsi login 
    public function login()
{
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = ['username' => 'april', 'password' => '202cb962ac59075b964b07152d234b70', 'role' => 'admin']; // passw 123

        if ($username == $dataUser['username']) {
            if (md5($password) == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['username'],
                    'role' => $dataUser['role'],
                    'isLoggedIn' => TRUE
                ]);

                return redirect()->to(base_url('/'));
            } else {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('failed', 'Username Tidak Ditemukan');
            return redirect()->back();
        }
    } else {
        return view('v_login');
    }
} 
public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}
}
