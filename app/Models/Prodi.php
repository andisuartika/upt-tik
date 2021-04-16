<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Prodi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function prodi(){
        $response = \Http::withHeaders([
            'token' => '$2y$10$2g.zwZh71FlRJNFOv/0yyuIhH6.0kcU3ELmVjzmXIcfkJtQ7yiaGy'
        ])->get('https://datacenter.undiksha.ac.id/sandbox/api/master/prodi');
        

        $result = json_decode($response->body());
        dd($result->datas);
        // foreach($result->datas as $prodi){

        //     $newProdi = \App\Models\Prodi::updateOrCreate([   
        //         'unitkerja_key'     => $prodi->unitkerja_key,
        //         'source_key' => $prodi->source_key,
        //         'kode_jurusan' => $prodi->kode_jurusan,
        //         'kode_prodi' => $prodi->kode_prodi,
        //     ], [
        //         'nama' => $prodi->nama,
        //         'nama_jurusan' => $prodi->nama_jurusan,
        //     ]);
        // }
        
    }

    public function alumni(){
        return $this->hasMany(Alumni::class, 'prodi');
    }
}
