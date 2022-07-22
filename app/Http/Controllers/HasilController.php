<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\hasil;

class HasilController extends Controller
{
    public function index()
    {
        $hasil = hasil::all();
        // dd($hasil);
        return view('hasil',compact('hasil'));
    }
}
