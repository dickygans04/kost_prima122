<?php

namespace App\Http\Controllers;

use App\Models\akun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    function tampil (){ 
        $akun = akun::get();
        return view ('akun.tampil', compact('akun'));
    }

    function tambah (){
        return view ('akun.tambah');
    }

    function submit (Request $request){
        $akun = new akun();
        $akun->nama = $request->nama;
        $akun->nomor_hp = $request->nomor_hp;
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->save();

        return redirect()->route('akun.tampil');
    }

    function edit ($id){
    $akun = akun::find($id);
    return view ('akun.edit', compact ('akun'));
    }
    
    function update (Request $request, $id){
        $akun = akun::find($id);
        $akun->nama = $request->nama;
        $akun->nomor_hp = $request->nomor_hp;
        $akun->email = $request->email;
        $akun->password = $request->password;
        $akun->update();

        return redirect()->route('akun.tampil');
        }

        function delete($id){
        $akun = akun::find($id);
        $akun->delete();
        return redirect()->route('akun.tampil');
        }
}