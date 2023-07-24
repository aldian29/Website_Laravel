<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    use HasFactory;
    protected $table="mahasiswa";
    protected $primaryKey ="nim";
    protected $fillable =['nim','nama','alamat','email','photo','kd_prodi','nidn'];
    protected $keyType = 'string';
    public $timestamps = false;

    public function ambilprodi()
    {
        return $this->belongsTo(Prodi::class, 'kd_prodi','kd_prodi');
    }

    public function ambildosen()
    {
        return $this->belongsTo(Dosen::class, 'nidn','nidn');
    }
}
