<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Alumni extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function alumniSync(){
        // login
        $login = Http::post('https://datacenter.undiksha.ac.id/sandbox/api/login', [
            'username' => 'devuser',
            'password' => 'hdejsdki'
        ]);

        $result = json_decode($login);
        $token = $result->token;

        $response = Http::withHeaders([
            'token' => $token,
            'model' => 'jumlah_alumni'
        ])->get('https://datacenter.undiksha.ac.id/sandbox/api/biosdata');
        

        $result = json_decode($response->body());

        foreach($result->datas as $alumni){

            $newAlumni = \App\Models\Alumni::updateOrCreate([   
                'id'     => $alumni->id,
            ], [
                'tgl_transaksi' => $alumni->tgl_transaksi,
                'fakultas' => $alumni->fakultas,
                'jurusan' => $alumni->jurusan,
                'prodi' => $alumni->prodi,
                'bekerja' => $alumni->bekerja,
                'belum_bekerja' => $alumni->belum_bekerja,
                'lanjut_kuliah' => $alumni->lanjut_kuliah,
                'ket' => $alumni->ket,
                'deleted_at' => $alumni->deleted_at,
            ]);
        }
        
    }

    public static function alumni(){
        $tgl = date('Y-m-d');
        $alumni =DB::table('alumnis')
        ->select('bekerja','belum_bekerja','lanjut_kuliah')    
        ->where('tgl_transaksi','=',$tgl);
        return $alumni;
    }

    public static function alumniFakultas($fakultas){
        $tgl = date('Y-m-d');

        $alumni =DB::table('alumnis')
        ->join('prodis', 'alumnis.prodi', '=', 'prodis.kode_prodi')
        ->join('fakultas', 'alumnis.fakultas', '=', 'fakultas.kode_fakultas')
        ->select('alumnis.*','prodis.nama as nama_prodi','prodis.nama_jurusan','prodis.slug_prodi','fakultas.nama as nama_fakultas')    
        ->where('alumnis.fakultas','=',$fakultas)
        ->where('alumnis.tgl_transaksi','=',$tgl)
        ->orderBy('alumnis.tgl_transaksi', 'desc')
        ->paginate(5, array('alumnis.*','fakultas.*'));

        
        return $alumni;
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
