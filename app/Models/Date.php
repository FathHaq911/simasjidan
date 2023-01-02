<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    public static function getHari()
    {
        $today = date("D");
        
        if($today = 'Sun'){
            $hari = "Minggu";
        } elseif ($today = 'Mon'){
            $hari = "Senin";
        } elseif ($today = 'Tue'){
            $hari = "Selasa";
        } elseif ($today = 'Tue'){
            $hari = "Rabu";
        } elseif ($today = 'Tue'){
            $hari = "Kamis";
        } elseif ($today = 'Tue'){
            $hari = "Jumat";
        } elseif ($today = 'Tue'){
            $hari = "Sabtu";
        } else {
            $hari = "Tidak di ketahui";		
        }

        return $hari;
       
    }
}
