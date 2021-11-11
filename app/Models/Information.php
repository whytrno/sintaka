<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'info_id';

    protected $fillable = [
        'info_title',
        'info_desc',
    ];
}
