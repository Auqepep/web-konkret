<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_ticket';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'seating_plan',
        'ticket_quantity',
        'total_price' 
    ];

    public $timestamps = false;
}

