<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edomjawaban extends Model
{
    use HasFactory;

    protected $table="jawaban_edom";
    protected $fillable =['id_hasilques','id_jawaban','id_quesioner','jawaban'];
    protected $keyType = 'string';
    public $timestamps = false;
}
