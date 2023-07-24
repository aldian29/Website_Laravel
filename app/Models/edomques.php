<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class edomques extends Model
{
    use HasFactory;

    protected $table="quesioner";
    protected $primaryKey ="id_quesioner";
    protected $fillable =['id_quesioner','pertanyaan','jenis_pertanyaan','status_pertanyaan'];
    protected $keyType = 'string';
    public $timestamps = false;
}
