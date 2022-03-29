<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tampil extends Model
{
        use HasFactory;
    	protected $table = "siswa_baru";
    	protected $guarded = ['id'];
    	protected $fillable = [
        'id',
        'nama_peserta',


        'pertanyaan4 ',

        'pertanyaan2',
        'pertanyaan1',
        'pertanyaan3',
        'rincian_tugas',
        'Skor1',
        'Skor4',
        'Skor2',
        'Skor3',
        'kota_id',
        'kecamatan_id',
        'kelurahan_id',
        'created_at',
        'updated_at',
        'user_id'
    ];
    
   		public $timestamps = false;

    //<<<<<<<
        public function kecamatan()
    {
        return $this->belongsTo('App\Models\Kecamatan');
    }
        public function kota()
    {
        return $this->belongsTo('App\Models\Kota');
    }
        public function kelurahan()
    {
        return $this->belongsTo('App\Models\Kelurahan');
    }
        public function agama()
    {
        return $this->belongsTo('App\Models\Agama');
    }
         public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //>>>>>>>

    public function informasi()
    {   
        return $this->hasMany('App\Models\Informasi', 'tampil');
    }
     public function validasi()
    {   
        return $this->hasMany('App\Models\Validasi', 'tampil');
    }


}
