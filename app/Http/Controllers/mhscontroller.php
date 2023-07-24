<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mhs;
use Illuminate\Support\Facades\file;
class mhscontroller extends Controller
{
    public function  index()
    {
        //dibawah ini panggil model mhs 
        $a = Mhs::all();
        $b = Mhs::join('dosen', 'mahasiswa.nidn', '=', 'dosen.nidn')
            ->join('prodi', 'prodi.kd_prodi', '=','mahasiswa.kd_prodi')
            ->get(['mahasiswa.*','dosen.*','prodi.*']);
        return view('about', ['tampil'=> $a,'mhsdsnprd'=> $b]);
    }
    public function about()
    {
        return view('ksabout');
    }

    public function kontak()
    {
        return view('kskontak');
    }
    public function galery()
    {
        return view('ksgalery');
    }

    public function member()
    {
        return view('ksmember');
    }
    public function kirim()
    {
        $a =1;
        $golongan="D";
        $b =11;
        $nilai1=50;
        $nilai2=100;
        
        return view('latihan2',['data1'=>$a,'data2'=>$b,'jam1'=>$nilai1,'jam2'=>$nilai2,'gol'=>$golongan] );
    }
    public function beranda()
    {
        return view('home');
    }
    public function popil()
    {
        return view('profile');
    }
    public function kontek()
    {
        return view('contact');
    }
    public function galeri()
    {
        return view('galery');
    }
    //pengisian untuk tabel mahasiswa
    public function abot()
    {
        $a = DB::table('mahasiswa')->get();
        return view('about',['tampil'=> $a]);
    }
    public function insert()
    {
        return view('inputmhs');
    }
    public function simpan(Request $p)
    {
        $filephoto=$p->file('photoku');
        $nama_file = $filephoto->getClientOriginalName();
        //$extension = $filephoto->getClientOriginaExtension();
        $path1 =$filephoto->getRealPath();
        $folder = 'folderpoto';
        $filephoto->move($folder,$nama_file);
        $path2 = $folder.'/'.$nama_file;
        mhs::create([
            'nim'=> $p->nimku,
            'nama'=> $p->namaku,
            'alamat'=> $p->alamatku,
            'email'=> $p->emailku,
            'photo'=> $path2
        ]);
        //DB::table('mahasiswa')->insert([
        //'nim'=> $k->nimku,
        //'nama'=> $k->namaku,
        //'alamat'=> $k->alamatku,
        //'email'=> $k->emailku
    //]);
        return redirect('/abot');
    }
    public function hapus($id)
    {
        //DB::table('mahasiswa')->where('nim',$id)->delete();
        $datamhs = mhs::find($id);
        $datamhs ->delete();
        if (File::exists(public_path($datamhs->photo))){
            File::delete(public_path($datamhs->photo));
        }

        return redirect('/abot');
    }
    public function edit($id){
        $a = DB::table('mahasiswa')->where('nim',$id)->get();
        return view('editmhs',['tampil'=>$a]);
    }
    public function update($x, Request $a)
    {
        $b=$a->file('photo');
        $datamhs = mhs::find($x);
        if (File_exists($b)){
            $nama_file = $b->getClientOriginalName();
            $folder = 'folderpoto';
            $b->move($folder,$nama_file);
            $path = $folder.'/'.$nama_file;
            if (File::exists(public_path($datamhs->photo))){
                File::delete(public_path($datamhs->photo));
            }
        }else{
            $path=$a->path1;
        }
        mhs::where('nim', $x)->update([
        'nim'=> $a->nimku,
        'nama'=> $a->namaku,
        'alamat'=> $a->alamatku,
        'email'=> $a->emailku,
        'photo'=> $path
    ]);
        return redirect('/abot');
    }
    //pengisian untuk tabel dosen
    public function tdosen()
    {
        $b = DB::table('dosen')->get();
        return view('contact',['tampil2'=> $b]);
    }
    public function insertdsn()
    {
        return view('inputdosen');
    }
    public function simpandsn(Request $d)
    {
        DB::table('dosen')->insert([
        'nidn'=> $d->nidnku,
        'namadsn'=> $d->namadku,
        'emaildsn'=> $d->emaildku
   ]);
        return redirect('/kontek');
    }
    public function hapusdosen($nidn)
    {
        DB::table('dosen')->where('nidn',$nidn)->delete();
        return redirect('/kontek');
    }
    public function editdosen($nidn){
        $b = DB::table('dosen')->where('nidn',$nidn)->get();
        return view('editdsn',['tampil2'=>$b]);
    }
    public function updatedsn(Request $d)
    {
        DB::table('dosen')->where('nidn', $d->nidnku)->update([
        'nidn'=> $d->nidnku,
        'namadsn'=> $d->namadku,
        'emaildsn'=> $d->emaildku
    ]);
        return redirect('/kontek');
    }
}