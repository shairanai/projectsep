<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    //
    public function show(){
        $data['artikel'] = Artikel::all();
        $data['total'] = Artikel::count();
        return view('index', $data);
    }

    public function search(Request $request){
        $data['artikel'] = Artikel::where('judul',$request->cari)->orWhere('genre',$request->cari)->get();
        $data['total'] = $data['artikel']->count();
        return view('/index',$data);
    }

    public function create(){
        return view('artikelcreate');
    }

    public function add(Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'genre' => 'required',
            'foto' => 'image'
        ]);

        $fileName = '';
        if($request->file('foto')){
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time().".".$extfile;
            $request->file('foto')->storeAs('foto',$fileName);
        }else{
            $fileName = '';
        }
        $artikel = Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'genre' => $request->genre,
            'foto' => $fileName
        ]);
        if ($artikel) {
            Session::flash('pesan','Data berhasil ditambahkan');
        }else{
            Session::flash('pesan','Data gagal ditambahkan');
        }
        return redirect('/index');
    }

    public function edit(Request $request){
        $data['artikel'] = Artikel::find($request->id);
        return view('artikeledit',$data);
    }

    public function delete(Request $request){
        $artikel = Artikel::find($request->id);
        $delete = Artikel::where('id', $request->id)->delete();
        if ($delete) {
            if ($artikel->foto) {
                Storage::delete('foto/'.$artikel->foto);
            }
            Session::flash('pesan', 'Data berhasil dihapus');
        }else{
            Session::flash('pesan', 'Data gagal ditambahkan');
        }
        return redirect('/index');
    }
    public function update(Request $request){
        $artikel = Artikel::find($request->id);

        $fileName = '';
        if ($request->file('foto')) {
            $extfile = $request->file('foto')->getClientOriginalExtension();
            $fileName = time() . "." .$extfile;
            $request->file('foto')->storeAs('foto', $fileName);
        }
        $update = Artikel::where('id',$request->id)->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'genre' => $request->genre,
            'foto' => $fileName
        ]);
        if ($update) {
            Session::flash('pesan', 'Data berhasil  diubah');
            
        }else{
            Session::flash('pesan', 'Data gagal diubah');
        }
        return redirect('/index');
    }

    function dashboard(){
        return view('/dashboard');
    }

    function detail($id){
        $data['artikel'] = Artikel::where('id', $id)->first();
        return view('detailcerita', $data);
    }
}
