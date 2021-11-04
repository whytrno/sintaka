<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DestinationImage extends Model
{
    use HasFactory;
    protected $primaryKey = 'destination_image_id';

    protected $fillable = [
        'destination_id',
        'destination_image'
    ];
}
