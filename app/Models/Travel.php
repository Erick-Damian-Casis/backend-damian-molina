<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    //use HasFactory;
    protected $table= 'travels';
    protected $fillable =[
        'cost',
        'driver_id',
        'date',
        'time',
    ];

    function driver(){
        return $this->hasOne(Driver::class);
    }
    function  addresses (){
        return $this->hasMany(Address::class);
    }

    
}
