<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;
    	protected $table = "kelurahan";
    	protected $guarded = ['id'];
    	protected $fillable = [
        'id',
        'nama_kelurahan',
        'kecamatan_id',
        'kota_id'
    ];
   		public $timestamps = false;

   		public function kecamatan()
    {
    	return $this->belongsTo('App\Models\Kecamatan');
    }
        public function kota()
    {
        return $this->belongsTo('App\Models\Kota');
    }
}
