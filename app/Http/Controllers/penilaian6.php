<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mhs;
use Illuminate\Support\Facades\file;
class penilaian6 extends Controller
{
    public function index()
    {
        return view('master6');
    }
}
