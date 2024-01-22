<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    protected $table = "permission";
    protected $fillable = [
        'id',
        'unique_id',
        'description',
        'code'
    ];
    public $timestamps = false;
}
