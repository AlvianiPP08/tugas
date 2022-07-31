<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function registers(){
        $data['title'] = 'Registers';
        return view('admin/registers', $data);
    }
}
