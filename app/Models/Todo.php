<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'tittle',
        'description',
        'date',
        'user_id',
        'status',
        'done_time',
    ];
}
