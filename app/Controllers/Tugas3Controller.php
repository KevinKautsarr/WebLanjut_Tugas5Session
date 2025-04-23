<?php
//Controler
namespace App\Controllers;

class Tugas3Controller extends BaseController
{
    public function index(): string
    {
        //return view('welcome_message');
        //return view('v_home');
        return view('welcome_message');
    }
    public function home4(): string
    {
        //return view('welcome_message');
        //return view('v_home');
        return view('v_home');
    }
    public function produk(): string
    {
        return view('v_produk');
    }
    public function login4(): string
    {
        return view('v_login');
    }
}
