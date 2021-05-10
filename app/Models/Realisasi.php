<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class realisasi extends Model
{
    use HasFactory;

    static function kodeAkun(){
        $kode_akun = DB::table('realisasis')
                    ->select('kode_akun')
                    ->distinct()
                    ->get();
        return $kode_akun;
    }

    static function realisasi2017($kode_akun){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2017')
                    ->where('kode_akun','=',$kode_akun)
                    ->get();

        return $realisasi;
    }

    static function realisasi2018($kode_akun){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2018')
                    ->where('kode_akun','=',$kode_akun)
                    ->get();

        return $realisasi;
    }
    static function realisasi2019($kode_akun){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2019')
                    ->where('kode_akun','=',$kode_akun)
                    ->get();

        return $realisasi;
    }
    static function realisasi2020($kode_akun){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2020')
                    ->where('kode_akun','=',$kode_akun)
                    ->get();

        return $realisasi;
    }
    static function realisasi2021($kode_akun){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2021')
                    ->where('kode_akun','=',$kode_akun)
                    ->get();

        return $realisasi;
    }

    static function pagu($tahun){
        $pagu = DB::table('anggarans')
                    ->select('total')
                    ->where('kode_tahun','=',$tahun)
                    ->get();
        return $pagu;
    }

    static function realisasiTh($tahun){
        $realisasiTh = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=',$tahun)
                    ->get();
        return $realisasiTh;
    }

    static function realisasiUnit2017($kode_unit){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2017')
                    ->where('kode_unit','=',$kode_unit)
                    ->get();

        return $realisasi;
    }
    static function realisasiUnit2018($kode_unit){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2018')
                    ->where('kode_unit','=',$kode_unit)
                    ->get();

        return $realisasi;
    }
    static function realisasiUnit2019($kode_unit){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2019')
                    ->where('kode_unit','=',$kode_unit)
                    ->get();

        return $realisasi;
    }
    static function realisasiUnit2020($kode_unit){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2020')
                    ->where('kode_unit','=',$kode_unit)
                    ->get();

        return $realisasi;
    }
    static function realisasiUnit2021($kode_unit){
        $realisasi = DB::table('realisasis')
                    ->select('total')
                    ->where('kode_tahun','=','2021')
                    ->where('kode_unit','=',$kode_unit)
                    ->get();

        return $realisasi;
    }

    static function realisasiBulan2017($bulan){
        $realisasi = DB::table('realisasis')
                    ->select('total','nama_unit')
                    ->where('kode_tahun','=','2017')
                    ->whereMonth('tanggal','=',$bulan)
                    ->get();
        return $realisasi;
    }
    static function realisasiBulan2018($bulan){
        $realisasi = DB::table('realisasis')
                    ->select('total','nama_unit')
                    ->where('kode_tahun','=','2018')
                    ->whereMonth('tanggal','=',$bulan)
                    ->get();
        return $realisasi;
    }
    static function realisasiBulan2019($bulan){
        $realisasi = DB::table('realisasis')
                    ->select('total','nama_unit')
                    ->where('kode_tahun','=','2019')
                    ->whereMonth('tanggal','=',$bulan)
                    ->get();
        return $realisasi;
    }
    static function realisasiBulan2020($bulan){
        $realisasi = DB::table('realisasis')
                    ->select('total','nama_unit')
                    ->where('kode_tahun','=','2020')
                    ->whereMonth('tanggal','=',$bulan)
                    ->get();
        return $realisasi;
    }
    static function realisasiBulan2021($bulan){
        $realisasi = DB::table('realisasis')
                    ->select('total','nama_unit')
                    ->where('kode_tahun','=','2021')
                    ->whereMonth('tanggal','=',$bulan)
                    ->get();
        return $realisasi;
    }
}
