<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
        return view('/login');
    }

    public function auth(Request $request){
        $validasi = $request->validate(rules:[
            'email' => ['required'],
            'password' => ['required']
        ]);
        if (Auth::attempt($validasi)) {
            # code...
            return redirect('/index');
        }else{
            return redirect()->withErrors([
                'email' => 'maaf, email anda salah',
            ]);
        }
        return redirect()->back()->with('pesan','mohon maaf login anda gagal');
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function home(){
        $data['artikel'] = Artikel::all();
        return view('/home', $data);
    }

    public function detailcerita(){
        return view('detailcerita');
    }

    public function detailcerita2(){
        return view('detailcerita2');
    }

    public function detailcerita3(){
        return view('detailcerita3');
    }

    public function detailcerita4(){
        return view('detailcerita4');
    }

    public function detailcerita5(){
        return view('detailcerita5');
    }
    public function detailcerita6(){
        return view('detailcerita6');
    }

    public function tentangkami(){
        return view('tentangkami');
    }

    public function fantasi(){
        return view('fantasi');
    }

    public function horor(){
        return view('horor');
    }

    public function romansa(){
        return view('romansa');
    }

    
}
