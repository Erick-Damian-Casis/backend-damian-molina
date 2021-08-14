<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //use HasFactory;
    protected $table= 'cars';
    protected $fillable=[
        'description',
        'enrollment',
        'driver_id',
    ];

    function driver(){
        return $this->belongsTo(Driver::class);
    }
}
