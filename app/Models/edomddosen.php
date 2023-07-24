<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edomddosen extends Model
{
    use HasFactory;

    protected $table="dosen_trpl";
    protected $primaryKey ="nidn";
    protected $fillable =['nidn','nama_dosen','alamat_dosen','jenis_kelamin','bidang_keahlian'];
    protected $keyType = 'string';
    public $timestamps = false;
}
