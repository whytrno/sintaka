<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    // Karena default id adalah id, jadi bukan ikut event_id
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'event_name',
        'event_desc',
        'event_place',
        'event_date_start',
        'event_date_end',
        'event_image',
    ];
}
