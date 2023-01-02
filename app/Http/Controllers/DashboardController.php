<?php

    namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Cash;
use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Http;
    use App\Models\DataFeed;
use App\Models\Kajian;
use Carbon\Carbon;

    class DashboardController extends Controller
    {
        

        /**
         * Displays the dashboard screen
         *
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
         */
        public function index()
        {

             // Waktu sekarang
            $d = (int)date('d'); //day
            $h = (int)date('H'); //jam
            $m = (int)date('i'); //menit
            $s = (int)date('s'); //detik

            $agenda = Agenda::latest()->paginate(8);
            $kajian = Kajian::latest()->paginate(8);
            $cash   = Cash::latest()->paginate(6);

            return view('pages/dashboard/dashboard', compact([ 'd', 'h', 'm', 's', 'agenda', 'kajian', 'cash']));
        }
    }
