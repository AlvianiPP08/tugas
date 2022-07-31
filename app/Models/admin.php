<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\admin as Authenticatable;

class admin extends Authenticatable
{
    use HasFactory;

    protected $table= 'tb_admin';
    protected $primaryKey= 'admin_id';

    protected $fillable= [
        'name',
        'username',
        'password'
    ];
}
