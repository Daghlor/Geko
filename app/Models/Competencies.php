<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competencies extends Model
{
    protected $table = "competencies";
    protected $fillable = [
        'id',
        'name_competencia',
        'code_ucl',
        'name_ucl',
        'description',
    ];
    public $timestamps = false;
}
