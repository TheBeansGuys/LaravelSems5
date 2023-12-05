<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class formController extends Controller
{
    public function index()
    {
        return view('form.index');


    }
    public function action(Request $request){
        $data = [
            'nama' => $request->nama,
            'npm' => $request->npm,
            'nilai' => $request->nilai
        ];
        $id = Form::add($data);
        if($id){
            return redirect()->route('form.get', ['id' => $id]);
        }
        else{
            return redirect()->route('form.index');
        }
    }
    public function get($id){
        $data = Form::find($id);
        if(!$data){
            return redirect()->route('form.index');
        }
        return view('form.result', ['data' => $data]);
    }

}
