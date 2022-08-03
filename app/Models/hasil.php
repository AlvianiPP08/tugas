<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
	public $timestamps = false;
    protected $table ="hasil";
	protected $primarykey = "nim";
	protected $fillable = [
		'nim', 'nama_mhs','hasil_peminatan'
	];
}
