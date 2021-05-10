<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Realisasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        
        $alumni =[
            'bekerja' => Alumni::alumni()->sum('bekerja'),
            'belum_bekerja' => Alumni::alumni()->sum('belum_bekerja'),
            'lanjut_kuliah' =>Alumni::alumni()->sum('lanjut_kuliah'),
         ];

        //  cek apakah sudah ada data jika belum akan di sync
         if($alumni ['bekerja'] == null){
             // sync API to DB Alumni
             Alumni::alumniSync();
         }

         $realisasiBulan = [
            '2017' => [
                'Jan' => Realisasi::realisasiBulan2017(1)->sum('total'), 
                'Feb' => Realisasi::realisasiBulan2017(2)->sum('total'), 
                'Mar' => Realisasi::realisasiBulan2017(3)->sum('total'), 
                'Apr' => Realisasi::realisasiBulan2017(4)->sum('total'), 
                'Mei' => Realisasi::realisasiBulan2017(5)->sum('total'), 
                'Jun' => Realisasi::realisasiBulan2017(6)->sum('total'), 
                'Jul' => Realisasi::realisasiBulan2017(7)->sum('total'), 
                'Aug' => Realisasi::realisasiBulan2017(8)->sum('total'), 
                'Sep' => Realisasi::realisasiBulan2017(9)->sum('total'), 
                'Oct' => Realisasi::realisasiBulan2017(10)->sum('total'), 
                'Nov' => Realisasi::realisasiBulan2017(11)->sum('total'), 
                'Dec' => Realisasi::realisasiBulan2017(12)->sum('total'), 
            ],
            '2018' => [
                'Jan' => Realisasi::realisasiBulan2018(1)->sum('total'), 
                'Feb' => Realisasi::realisasiBulan2018(2)->sum('total'), 
                'Mar' => Realisasi::realisasiBulan2018(3)->sum('total'), 
                'Apr' => Realisasi::realisasiBulan2018(4)->sum('total'), 
                'Mei' => Realisasi::realisasiBulan2018(5)->sum('total'), 
                'Jun' => Realisasi::realisasiBulan2018(6)->sum('total'), 
                'Jul' => Realisasi::realisasiBulan2018(7)->sum('total'), 
                'Aug' => Realisasi::realisasiBulan2018(8)->sum('total'), 
                'Sep' => Realisasi::realisasiBulan2018(9)->sum('total'), 
                'Oct' => Realisasi::realisasiBulan2018(10)->sum('total'), 
                'Nov' => Realisasi::realisasiBulan2018(11)->sum('total'), 
                'Dec' => Realisasi::realisasiBulan2018(12)->sum('total'), 
            ],
            '2019' => [
                'Jan' => Realisasi::realisasiBulan2019(1)->sum('total'), 
                'Feb' => Realisasi::realisasiBulan2019(2)->sum('total'), 
                'Mar' => Realisasi::realisasiBulan2019(3)->sum('total'), 
                'Apr' => Realisasi::realisasiBulan2019(4)->sum('total'), 
                'Mei' => Realisasi::realisasiBulan2019(5)->sum('total'), 
                'Jun' => Realisasi::realisasiBulan2019(6)->sum('total'), 
                'Jul' => Realisasi::realisasiBulan2019(7)->sum('total'), 
                'Aug' => Realisasi::realisasiBulan2019(8)->sum('total'), 
                'Sep' => Realisasi::realisasiBulan2019(9)->sum('total'), 
                'Oct' => Realisasi::realisasiBulan2019(10)->sum('total'), 
                'Nov' => Realisasi::realisasiBulan2019(11)->sum('total'), 
                'Dec' => Realisasi::realisasiBulan2019(12)->sum('total'), 
            ],
            '2020' => [
                'Jan' => Realisasi::realisasiBulan2020(1)->sum('total'), 
                'Feb' => Realisasi::realisasiBulan2020(2)->sum('total'), 
                'Mar' => Realisasi::realisasiBulan2020(3)->sum('total'), 
                'Apr' => Realisasi::realisasiBulan2020(4)->sum('total'), 
                'Mei' => Realisasi::realisasiBulan2020(5)->sum('total'), 
                'Jun' => Realisasi::realisasiBulan2020(6)->sum('total'), 
                'Jul' => Realisasi::realisasiBulan2020(7)->sum('total'), 
                'Aug' => Realisasi::realisasiBulan2020(8)->sum('total'), 
                'Sep' => Realisasi::realisasiBulan2020(9)->sum('total'), 
                'Oct' => Realisasi::realisasiBulan2020(10)->sum('total'), 
                'Nov' => Realisasi::realisasiBulan2020(11)->sum('total'), 
                'Dec' => Realisasi::realisasiBulan2020(12)->sum('total'), 
            ],
            '2021' => [
                'Jan' => Realisasi::realisasiBulan2021(1)->sum('total'), 
                'Feb' => Realisasi::realisasiBulan2021(2)->sum('total'), 
                'Mar' => Realisasi::realisasiBulan2021(3)->sum('total'), 
                'Apr' => Realisasi::realisasiBulan2021(4)->sum('total'), 
                'Mei' => Realisasi::realisasiBulan2021(5)->sum('total'), 
                'Jun' => Realisasi::realisasiBulan2021(6)->sum('total'), 
                'Jul' => Realisasi::realisasiBulan2021(7)->sum('total'), 
                'Aug' => Realisasi::realisasiBulan2021(8)->sum('total'), 
                'Sep' => Realisasi::realisasiBulan2021(9)->sum('total'), 
                'Oct' => Realisasi::realisasiBulan2021(10)->sum('total'), 
                'Nov' => Realisasi::realisasiBulan2021(11)->sum('total'), 
                'Dec' => Realisasi::realisasiBulan2021(12)->sum('total'), 
            ],
            
        ];
         
        return view('dashboard', compact('alumni', 'realisasiBulan') );
    }
}
