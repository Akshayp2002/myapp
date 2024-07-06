<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notes extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'notes';
    protected $fillable = [
        'user_id',
        'title',
        'notes',
    ];

    protected $dates = ['deleted_at'];
}
