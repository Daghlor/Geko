<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Competencies extends Model
{
    protected $table = "user_competencies";
    protected $fillable = [
        'id',
        'user_id',
        'competencies_id',
        'acreditado',
        'alcance_cierre_brechas'
    ];
    public $timestamps = false;
}
