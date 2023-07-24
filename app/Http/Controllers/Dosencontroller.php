<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class Dosencontroller extends Controller
{
    public function  index()
    {
        //dibawah ini panggil model dosen 
        $a = Dosen::all();
        return view('dosen', ['dsn'=> $a]);
    }
    public function input(){
        return view ('inptdsnequ');
    }
    public function simpan(Request  $z)
    {
        $filephoto=$z->file('photodequ');
        $nama_file = $filephoto->getClientOriginalName();
        //$extension = $filephoto->getClientOriginaExtension();
        $path1 =$filephoto->getRealPath();
        $folder = 'folderpoto';
        $filephoto->move($folder,$nama_file);
        $path2 = $folder.'/'.$nama_file;
        dosen::create([
            'nidn'=> $z->nidnequ,
            'namadsn'=> $z->namadequ,
            'emaildsn'=> $z->emaildequ,
            'photo'=> $path2
        ]);
        return redirect('dsn');
    }
    public function hapusdosen($nidn)
    {
        //DB::table('mahasiswa')->where('nim',$id)->delete();
        $datadsn = dosen::find($nidn);
        $datadsn ->delete();
        if (File::exists(public_path($datadsn->photo))){
            File::delete(public_path($datadsn->photo));
        }

        return redirect('/dsn');
    }
}