<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\file;
use App\Models\edomddosen;
use App\Models\edommatkul;
use App\Models\edomques;
use App\Models\edomhasilques;
use App\Models\edomjawaban;
class edomcontroller extends Controller
{
    public function splashscreen()
    {
        return view('edomwelcome');
    }

    public function login()
    {
        return view('edomlogin');
    }
    public function index()
    {
        return view('edommaster');
    }
    public function homeedom()
    {
        return view('edomhome');
    }

// data edom dosen
    public function dosenedom()
    {
        $datadsn = edomddosen::all();
        return view('edomdatadosen',['viewDsn' =>$datadsn]);
    }
    public function tambahdosen()
    {
        return view('edominsrtdosen');
    }
    public function simpandosen(Request $a)
    {
        edomddosen::create([
            'nidn'=> $a->xnidn,
            'nama_dosen'=> $a->xnama,
            'alamat_dosen'=> $a->xalamat,
            'jenis_kelamin'=> $a->xjk,
            'bidang_keahlian'=> $a->xbidang
        ]);
        return redirect('/dosen');
    }
    public function editdosen($nidn)
    {
        $datadsn = edomddosen::find($nidn);
        return view('edomeditdosen',['dsn' => $datadsn]);
    }
    public function updatedosen($nidn, Request $d)
    {
        edomddosen::where("nidn","$nidn")->update([
            'nidn'=> $d->xnidn,
            'nama_dosen'=> $d->xnama,
            'alamat_dosen'=> $d->xalamat,
            'jenis_kelamin'=> $d->xjk,
            'bidang_keahlian'=> $d->xbidang
        ]);
        return redirect('/dosen');
    }
    public function deletedosen($nidn)
    {
        $datadsn = edomddosen::find($nidn);
        $datadsn->delete();
        return redirect('/dosen');
    }

    // data edom matkul
    public function matkuledom()
    {
        $datamk = edommatkul::all();
        return view('edomdatamk',['viewMk' =>$datamk]);
    }
    public function tambahmatkul()
    {
        return view('edominsrtmk');
    }
    public function simpanmatkul(Request $a)
    {
        edommatkul::create([
            'id_matkul'=> $a->xid,
            'nama_matkul'=> $a->xnamamk,
            'sks_matkul'=> $a->xsks,
            'semester_matkul'=> $a->xsmtr
        ]);
        return redirect('/matkul');
    }
    public function editmatkul($id_matkul)
    {
        $datamk = edommatkul::find($id_matkul);
        return view('edomeditmatkul',['mk' => $datamk]);
    }
    public function updatematkul($id_matkul, Request $m)
    {
        edommatkul::where("id_matkul","$id_matkul")->update([
            'id_matkul'=> $m->xid,
            'nama_matkul'=> $m->xnamamk,
            'sks_matkul'=> $m->xsks,
            'semester_matkul'=> $m->xsmtr
        ]);
        return redirect('/matkul');
    }
    public function deletematkul($id_matkul)
    {
        $datamk = edommatkul::find($id_matkul);
        $datamk->delete();
        return redirect('/matkul');
    }
    // quesioner
    public function quesedom()
    {
        $dataq = edomques::all();
        return view('edomquesioner',['viewq' =>$dataq]);
    }
    public function tambahques()
    {
        return view('edominsrtques');
    }
    public function simpanques(Request $a)
    {
        edomques::create([
            'id_quesioner'=> $a->xidq,
            'pertanyaan'=> $a->xpert,
            'jenis_pertanyaan'=> $a->xjenis,
            'status_pertanyaan'=> $a->xsts
        ]);
        return redirect('/ques');
    }
    public function editques($id_quesioner)
    {
        $dataq = edomques::find($id_quesioner);
        return view('edomeditques',['q' => $dataq]);
    }
    public function updateques($id_quesioner, Request $m)
    {
        edomques::where("id_quesioner","$id_quesioner")->update([
            'id_quesioner'=> $m->xidq,
            'pertanyaan'=> $m->xpert,
            'jenis_pertanyaan'=> $m->xjenis,
            'status_pertanyaan'=> $m->xsts
        ]);
        return redirect('/ques');
    }
    public function deleteques($id_quesioner)
    {
        $dataq = edomques::find($id_quesioner);
        $dataq->delete();
        return redirect('/ques');
    }
    // soal Quesioner
    public function isiques()
    {
        $dataDsn = DB::table('dosen_trpl')->get();
        $dataMk = DB::table('matkul_trpl')->get();
        $data = DB::table('quesioner')->get();
        return view ('edomsoalques',['datapm' => $dataMk,'datapd' => $dataDsn,'data'=> $data]);
    }
    public function tambahedommhs(Request $a){
        $kode = DB::table('hasil_quesioner')->max('id_hasil');
    	$addNol = '';
    	$kode = str_replace("QE", "", $kode);
    	$kode = (int) $kode + 1;
        $incrementKode = $kode;

    	if (strlen($kode) == 1) {
    		$addNol = "000";
    	} elseif (strlen($kode) == 2) {
    		$addNol = "00";
        } elseif (strlen($kode) == 3) {
    		$addNol = "0";
        }
    	$idquesioner = "QE".$addNol.$incrementKode;

        edomhasilques::create([
            'id_hasil'=> $idquesioner,
            'nidn'=> $a->dosen,
            'id_matkul'=> $a->mk,
            'semester'=> $a->smt,
            'tahun' => "2023"
        ]);

        $data = DB::table('quesioner')->get();
        $i=0;
        $idkode=$i + 1;
        foreach($data as $x){
                    $db=$x->id_quesioner;
                    DB::table('jawaban_edom')->insert([
                        'id_hasilques' => $idkode,
                        'id_jawaban' => $idquesioner,
                        'id_quesioner' => $x->id_quesioner,
                        'jawaban'=> $a->input("$db")
                    ]);
        }
        return redirect('/soalques')->with('alert-success','Data Saved!! Thank You For Evaluation');;
    }
    //about us
    public function contactedom()
    {
        return view('edomcontact');
    }
}