<?php

namespace App\Controllers;

class KategoriController extends BaseController
{
    // method index() dipanggil untuk menangani permintaan.
    public function index()
    {
        // Data kategori
        $data['categories'] = [
            //kunci => nilai
            'Alat Tulis' => 'v_alatTulis',
            'Pakaian' => 'v_pakaian',
            'Pertukangan' => 'v_pertukangan',
            'Elektronik' => 'v_elektronik',
            'Snack' => 'v_snack'
        ];

        //   Tampilkan view kategori
        return view('kategori_view', $data);
    }
    public function alatTulis(){
        return view('v_alatTulis');
    }
    public function pakaian(){
        return view('v_pakaian');
    }
    public function pertukangan() {
        return view('v_pertukangan');
    }
    public function elektronik() {
        return view('v_elektronik');
    }
    public function snack() {
        return view('v_snack');
    }


}
    
