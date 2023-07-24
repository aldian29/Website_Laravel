<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edommatkul extends Model
{
    use HasFactory;

    protected $table="matkul_trpl";
    protected $primaryKey ="id_matkul";
    protected $fillable =['id_matkul','nama_matkul','sks_matkul','semester_matkul'];
    protected $keyType = 'string';
    public $timestamps = false;
}
