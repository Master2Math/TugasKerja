<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
        use HasFactory;
    	protected $table = "kecamatan";
    	protected $guarded = ['id'];
    	protected $fillable = [
        'id',
        'nama_kecamatan',
        'kota_id'
    ];
   		public $timestamps = false;

   		public function kota()
    {
    	return $this->belongsTo('App\Models\Kota');
    }
    //<<<<<<<

    //>>>>>>>
    	public function kelurahan()
    {	
    	return $this->hasMany('App\Models\Kelurahan');
    }
}
