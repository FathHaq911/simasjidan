<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // Waktu sekarang
        
        $y = (int)date('y'); //year
        $m = (int)date('m'); //month
        $d = (int)date('d'); //day
        $h = (int)date('H'); //jam
        $i = (int)date('i'); //menit
        $s = (int)date('s'); //detik

        // Jadwal Sholat per tahun 2022
        $pray = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/20' . $y . '/' . $m ));

        $jadwal = $pray->data->jadwal;

        $h_subuh    = (int)substr($jadwal[$d-1]->subuh,     0, 2);
        $m_subuh    = (int)substr($jadwal[$d-1]->subuh,     3, 4);
        $h_terbit   = (int)substr($jadwal[$d-1]->terbit,    0, 2);
        $m_terbit   = (int)substr($jadwal[$d-1]->terbit,    3, 4);
        $h_dzuhur   = (int)substr($jadwal[$d-1]->dzuhur,    0, 2);
        $m_dzuhur   = (int)substr($jadwal[$d-1]->dzuhur,    3, 4);
        $h_ashar    = (int)substr($jadwal[$d-1]->ashar,     0, 2);
        $m_ashar    = (int)substr($jadwal[$d-1]->ashar,     3, 4);
        $h_maghrib  = (int)substr($jadwal[$d-1]->maghrib,   0, 2);
        $m_maghrib  = (int)substr($jadwal[$d-1]->maghrib,   3, 4);
        $h_isya     = (int)substr($jadwal[$d-1]->isya,      0, 2);
        $m_isya     = (int)substr($jadwal[$d-1]->isya,      3, 4);

        $waktu = [$h_subuh, $h_terbit, $h_dzuhur, $h_ashar, $h_maghrib, $h_isya, $m_subuh, $m_terbit, $m_dzuhur, $m_ashar, $m_maghrib, $m_isya];

        // dd($waktu[4]);

        return view('index', compact(['jadwal', 'y', 'm', 'd', 'h', 'i', 's', 'waktu',]));

    }
}
