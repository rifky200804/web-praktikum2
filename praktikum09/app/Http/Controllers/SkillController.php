<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return view('form_skill');
    }
    
    public function hasil(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required'
        ]);

        // dd($request);
        return view('hasil_skill',['data'=>$request]);
    }
}

