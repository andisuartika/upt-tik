<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    public function syncFakultas(){

        // sync API to DB Fakultas
        $fakultas = Fakultas::sync();
    }

}
