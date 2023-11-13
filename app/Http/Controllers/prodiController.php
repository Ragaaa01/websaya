<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index(){
        $prodi = "Prodi";
        $title = "Prodi WebSaya.Com";
        $slug = "prodi";
        $dataPrd = $this->iniProdi();
        return view('konten.prodi', compact('prodi', 'title', 'slug', "dataPrd"));
    }

    public function iniProdi(){
        $dataPrd = array(
            [
                'ti' => 'D3 TEKNIK INFORMATIKA',
                'tm' => 'D3 TEKNIK MESIN',
                'tp' => 'D3 TEKNIK PENDINGIN & TATA UDARA',
                'kp' => 'D3 KEPERAWATAN',
            ],
            [
                'ti' => 'D4 REKAYASA PERANGKAT LUNAK',
                'tm' => 'D4 PERANCANGAN MANUFAKTUR',
                'tp' => 'D4 TEKNIK REKAYASA INSTRUMENTASI & KONTROL',
                'kp' => '',
            ],
            [
                'ti' => 'D4 SISTEM INFORMASI KOTA CERDAS',
                'tm' => '',
                'tp' => '',
                'kp' => '',
            ]
        );
        return $dataPrd;
    }

}
