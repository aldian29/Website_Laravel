<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;

class prodicontroller extends Controller
{
    public function  index()
    {
        //dibawah ini panggil model prodi 
        $a = prodi::all();
        return view('prodiequ', ['prd'=> $a]);
    }
    public function input(){
        return view ('inputprodi');
    }
    public function simpan(Request  $z)
    {
        $a  = new prodi();
        $a->kd_prodi = $z->kdprdequ;
        $a->nama_prodi= $z->namaprdequ;

        $a->save();
        return redirect('prd');
    }
    public function delete($kd_prodi)
{
    $dataprd = prodi::find($kd_prodi);
    $dataprd->delete();
    return redirect('/prd');
}
public function editprd($z)
{
    $dataprd = prodi::find($z);
    return view ('editprd', ['eprd' => $dataprd]);
}

    public function updateprd($kd_prodi, Request $a)
{
    prodi::where("kd_prodi", $kd_prodi)->update([
        'kd_prodi' =>  $a->kd_prodi,
        'nama_prodi' =>  $a->nama_prodi
    ]);
    return redirect ('/prd');
}
    
}