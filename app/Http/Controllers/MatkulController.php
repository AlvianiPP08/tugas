<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\mk_jarkom;
use App\Models\mk_kwc;
use App\Models\mk_rpl;

class MatkulController extends Controller
{
    public function index()
    {
        $terserah = mk_jarkom::all();
        $mk_kwc = mk_kwc::all();
        $mk_rpl = mk_rpl::all();

        //mengirim data keview
        // return view('nilai',compact('mk_jarkom', 'mk_kwc')); 

        return view('nilaimhs',[
            'terserah'=> $terserah,
            'mk_kwc'=> $mk_kwc,
            'mk_rpl'=> $mk_rpl
            //mengirim data menggunakaan array
        ]);
    }

    public function tambahmhs(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        // dd($request->all());
        mk_jarkom::create($request->all());
    }
}
