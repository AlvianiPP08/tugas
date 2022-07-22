<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mk_jarkom extends Model
{
    protected $table ="mk_jarkom";
	protected $primarykey = "nim";
	protected $fillable = [
		'sistem_tekinf', 'jarkom', 'prak_jarkom', 'sistem_digital', 'arsitektur_organisasikom', 'keamanan_informasi', 'jumlah'
	];
}
