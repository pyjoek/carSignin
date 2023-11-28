<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public $fillable = ['car_number','driver_name','phone_number','reason','time_in','time_out'];

    public $table = 'history';
    
}
