<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use App\Models\Prodi;
use App\Models\Fakultas;
use Illuminate\Support\Facades\DB;

class AlumniController extends Controller
{
    
    public function syncAlumni(){
        // sync API to DB Alumni
        $alumni = Alumni::alumniSync();

        return redirect('/sync')->with('succes', 'Sync Data Berhasil');
    }

    public function index(){
        
    }

    public function alumniFakultas($id){
        $tgl = date('Y-m-d');

        // $alumni = Alumni::where('fakultas', 05)->get();
        $alumni = Alumni::alumniFakultas($id);

        $chart =[
           'bekerja' => Alumni::alumniFakultas($id)->sum('bekerja'),
           'belum_bekerja' => Alumni::alumniFakultas($id)->sum('belum_bekerja'),
           'lanjut_kuliah' =>Alumni::alumniFakultas($id)->sum('lanjut_kuliah'),
        ] ;
        
        return view('alumni.alumniFakultas', compact('alumni','chart'));
    }

    public function sync(){
        return view('sync');
    }

    public function alumni(){

        $alumnis = [
            'fip' => [
                'bekerja' => Alumni::alumniFakultas('01')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('01')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('01')->sum('lanjut_kuliah'),
            ],
            'fbs' => [
                'bekerja' => Alumni::alumniFakultas('02')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('02')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('02')->sum('lanjut_kuliah'),
            ],
            'fmipa' => [
                'bekerja' => Alumni::alumniFakultas('03')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('03')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('03')->sum('lanjut_kuliah'),
            ],
            'fhis' => [
                'bekerja' => Alumni::alumniFakultas('04')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('04')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('04')->sum('lanjut_kuliah'),
            ],
            'ftk' => [
                'bekerja' => Alumni::alumniFakultas('05')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('05')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('05')->sum('lanjut_kuliah'),
            ],
            'fok' => [
                'bekerja' => Alumni::alumniFakultas('06')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('06')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('06')->sum('lanjut_kuliah'),
            ],
            'pasca' => [
                'bekerja' => Alumni::alumniFakultas('07')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('07')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('07')->sum('lanjut_kuliah'),
            ],
            'fe' => [
                'bekerja' => Alumni::alumniFakultas('08')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('08')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('08')->sum('lanjut_kuliah'),
            ],
            'fk' => [
                'bekerja' => Alumni::alumniFakultas('09')->sum('bekerja'),
                'belum_bekerja' => Alumni::alumniFakultas('09')->sum('belum_bekerja'),
                'lanjut_kuliah' =>Alumni::alumniFakultas('09')->sum('lanjut_kuliah'),
            ],
        ];

        $alumni =[
            'bekerja' => Alumni::alumni()->sum('bekerja'),
            'belum_bekerja' => Alumni::alumni()->sum('belum_bekerja'),
            'lanjut_kuliah' =>Alumni::alumni()->sum('lanjut_kuliah'),
         ];

         if($alumni ['bekerja'] == null){
             // sync API to DB Alumni
             Alumni::alumniSync();
         }
        return view('alumni.alumni', compact('alumnis','alumni'));
    }

}
