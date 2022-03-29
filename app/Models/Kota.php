<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    	protected $table = "kota";
    	protected $guarded = ['id'];
    	protected $fillable = [
        'id',
        'nama_kota',
        'pivot'
    ];
   		public $timestamps = false;

    //<<<<<<<

    //>>>>>>>
    
    	public function kecamatan()
    {	
    	return $this->hasMany('App\Models\Kecamatan');
    }
}
