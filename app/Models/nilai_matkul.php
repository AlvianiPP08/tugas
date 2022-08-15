<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilai_matkul extends Model
{
	public $timestamps = false;
    protected $table ="nilai_matkul";
	protected $primarykey = "nim";
	protected $fillable = [
		'nim', 'kode_peminatan', 'nilai', 'kode_mk'
	];
	
	protected $guarded = [];

}
