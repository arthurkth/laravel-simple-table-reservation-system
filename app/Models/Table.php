<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'tables';
    public $timestamps = false;
}
