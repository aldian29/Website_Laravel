<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table="dosen";
    protected $primaryKey ="nidn";
    protected $fillable =['nidn','namadsn','emaildsn','photo'];
    public $timestamps = false;

    public function Dosen()
    {
        return $this->hasMany(Dosen::class);
    }
}