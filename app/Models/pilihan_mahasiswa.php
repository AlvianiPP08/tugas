<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pilihan_mahasiswa extends Model
{
	public $timestamps = false;
    protected $table ="pilihan_mahasiswa";
	protected $primarykey = "nim";
	protected $fillable = [
		'nim', 'pilihan_profesi', 'pilihan_minat_bakat'
	];
}
