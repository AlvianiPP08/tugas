<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mk_jarkom;
use App\Models\mk_kwc;
use App\Models\mk_rpl;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terserah = mk_jarkom::all();
        $mk_kwc = mk_kwc::all();
        $mk_rpl = mk_rpl::all();

        //mengirim data keview
        // return view('nilai',compact('mk_jarkom', 'mk_kwc')); 

        return view('nilai',[
            'terserah'=> $terserah,
            'mk_kwc'=> $mk_kwc,
            'mk_rpl'=> $mk_rpl
            //mengirim data menggunakaan array
        ]);

    }
}