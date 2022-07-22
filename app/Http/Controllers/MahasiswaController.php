<?php

namespace App\Http\Controllers;
use App\mahasiswa;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class MahasiswaController extends Controller
{
    public function insert(){
        $urlData = getURLList();
        return view('mhs_create');
    }
    public function create(Request $request){
        $rules = [
			'nim' => 'required|char|max:15',
			'nama' => 'required|varchar|max:100',
			'mk_rpl' => 'required|int',
            'mk_kwc' => 'required|int',        
            'mk_jarkom' => 'required|int',
            'profesi_kerja' => 'required|int',
            'minat_bakat' => 'required|int'
        
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$mahasiswas = new mahasiswa;
                $mahasiswa->nim = $data['nim'];
                $mahasiswa->mk_rpl = $data['mk_rpl'];
				$mk_jarkom->mk_kwc = $data['mk_kwc'];
				$mk_jarkom->mk_jarkom = $data['mk_jarkom'];
                $mk_jarkom->profesi_kerja = $data['profesi_kerja'];
                $mk_jarkom->minat_bakat = $data['minat_bakat'];
				$student->save();
				return redirect('insert')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('insert')->with('failed',"operation failed");
			}
		}
    }
}
