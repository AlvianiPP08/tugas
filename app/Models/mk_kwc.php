<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mk_KWC extends Model
{
    protected $table ="mk_kwc";
	protected $primarykey = "nim";
	protected $fillable = [
		'data_mining', 'tekweb', 'prak_tekweb', 'sda', 'prak_sda', 'dasar_algoritma', 'jumlah'
	];
}
