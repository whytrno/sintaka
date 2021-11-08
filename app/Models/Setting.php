<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $primaryKey = 'setting_id';

    protected $fillable = [
        'name',
        'description',
        'logo',
        'no_hp',
        'email',
        'address',
    ];
}
