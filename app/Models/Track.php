<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table = 'tracks';

    public $fillable = ['car_number','driver_name','phone_number','reason','time_in'];
    use HasFactory;
}
