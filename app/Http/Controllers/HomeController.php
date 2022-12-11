<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // Waktu sekarang
        $d = (int)date('d'); //day
        $h = (int)date('H'); //jam
        $m = (int)date('i'); //
        $s = (int)date('s');

        // Jadwal Sholat per tahun 2022
        // $jan = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/01'));
        // $feb = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/02'));
        // $mar = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/03'));
        // $apr = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/04'));
        // $mei = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/05'));
        // $jun = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/06'));
        // $jul = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/07'));
        // $agu = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/08'));
        // $sep = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/09'));
        // $okt = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/10'));
        // $nov = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/11'));

        $pray = json_decode(Http::get('https://api.myquran.com/v1/sholat/jadwal/1204/2022/12'));

        // $pray = ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'agu', 'sep', 'okt', 'nov', 'des', ];


        $jadwal = $pray->data->jadwal;

        return view('index', compact(['jadwal', 'd', 'h', 'm', 's']));

    }
}
