<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities_Criteria extends Model
{
    protected $table = "activities_criteria";
    protected $fillable = [
        'id',
        'competence_id',
        'key_activity',
        'performance_criterion',
    ];
    public $timestamps = false;
}
