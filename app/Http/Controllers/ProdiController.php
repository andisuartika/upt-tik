<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class ProdiController extends Controller
{
    public function syncProdi(){

        // sync API to DB Prodi
        $Prodi = Prodi::sync();
    }
}
