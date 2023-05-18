<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'reservations';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'phone',
        'date',
        'hour',
        'escorts',
        'id_table',
        'id_user'
    ];
}
