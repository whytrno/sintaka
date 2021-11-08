<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;
    protected $primaryKey = 'testimoni_id';

    protected $fillable = [
        'name',
        'content',
    ];
}
