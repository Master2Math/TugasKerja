<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasi extends Model
{
		use HasFactory;
    	protected $table = "siswa_validasi";
    	protected $guarded = ['id'];
    	protected $fillable = [
        'id',
        'peserta_id',
        'status',
        'tgl_validasi',
        'validasi_nik',
        'validasi_akta',
        'validasi_umur'
    ];
   		public $timestamps = false;

    //<<<<<<<
        public function tampil()
    {   
        return $this->belongsTo('App\Models\Tampil', 'peserta_id');
//      return $this->belongsTo('App\Models\NamaModel', 'foreign_key');
    }

        //>>>>>>>
}
