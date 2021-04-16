<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Fakultas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function sync(){

        $login = Http::post('https://datacenter.undiksha.ac.id/sandbox/api/login', [
            'username' => 'devuser',
            'password' => 'hdejsdki'
        ]);

        $result = json_decode($login);
        $token = $result->token;
        
        $response = \Http::withHeaders([
            'token' => $token
        ])->get('https://datacenter.undiksha.ac.id/sandbox/api/master/fakultas');
        

        $result = json_decode($response->body());
        foreach($result->datas as $fakultas){

            $newFakultas = \App\Models\Fakultas::updateOrCreate([   
                'unitkerja_key'     => $fakultas->unitkerja_key,
                'source_key' => $fakultas->source_key,
                'kode_fakultas' => $fakultas->kode_fakultas,
            ], [
                'nama' => $fakultas->nama,
            ]);
        }
        
    }

    public function alumni(){
            return $this->hasMany(Alumni::class, 'fakultas');
    }
}
