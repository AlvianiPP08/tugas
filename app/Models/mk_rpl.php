<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mk_rpl extends Model
{
	public $timestamps = false;
    protected $table ="mk_rpl";
	protected $primarykey = "nim";
	protected $fillable = [
		'nim', 'ddp', 'prak_ddp', 'prak_basdat', 'basdat', 'pbo', 'prak_pbo', 'rpl', 'basdat_lanjut', 'pem_visual', 'analisa_perancangan_sis', 'tbo', 'jumlah'
	];
}
