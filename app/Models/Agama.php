<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    use HasFactory;
      	protected $table = "users";
      	protected $guarded = ['id'];
      	protected $fillable = [
        'id',
        'name'
    ];
   		public $timestamps = false;

   		
}
