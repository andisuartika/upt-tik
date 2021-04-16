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

        return redirect('/dashboard')->with('succes', 'Sync Data Berhasil');
    }

    public function index(){

        $alumnis['belum_bekerja'] = Alumni::pluck('belum_bekerja');
        $alumnis['bekerja'] = Alumni::pluck('bekerja');
        $alumnis['prodi'] = Alumni::get();

        $fakultas = Fakultas::pluck('nama');


        return view('dashboard', compact('alumnis','fakultas'));
    }

    public function alumniFtk(){

        // $alumni = Alumni::where('fakultas', 05)->get();
        $alumni = Alumni::alumniFakultas(05);
       
        return view('alumni.alumniFakultas', compact('alumni'));
    }

    public function alumniFip(){

        // $alumni = Alumni::where('fakultas', 05)->get();
        $alumni = Alumni::alumniFakultas(01);
       
        return view('alumni.alumniFakultas', compact('alumni'));
    }
}
