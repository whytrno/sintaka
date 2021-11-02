<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $primaryKey = 'destination_id';

    protected $fillable = [
        'destination_image_id',
        'destination_type_id',
        'destination_name',
        'destination_profil',
        'destination_facility',
        'destination_ticket_price',
        'destination_address'
    ];
}
