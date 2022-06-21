<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vluchten extends Model
{
    protected $table = 'vluchten';
    protected $primaryKey = 'id';
    protected $fillable = ['vertrekplaats', 'bestemming'];
}
