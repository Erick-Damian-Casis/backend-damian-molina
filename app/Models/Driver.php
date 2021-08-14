<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //use HasFactory;
    protected $table= 'drivers';
    protected $fillable=[
        'available',
        'city',
        'date',
        'driverLicense',
        'gmail',
        'lastName',
        'names',
        'password',
        'phone',
    ];

    function driver(){
        return $this->hasOne(Driver::class);
    }
    
    function travel(){
        return $this->hasMany(Travel::class);
    }
    
}


