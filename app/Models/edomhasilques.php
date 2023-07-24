<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edomhasilques extends Model
{
    use HasFactory;

    protected $table="hasil_quesioner";
    protected $primaryKey ="id_hasil";
    protected $fillable =['id_hasil','tahun','semester','nidn','id_matkul','id_quesioner'];
    protected $keyType = 'string';
    public $timestamps = false;
}
