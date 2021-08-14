<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    //use HasFactory;
    protected $table= 'addresses';
    protected $fillable=[
        'endAddress',
        'startAddress',
        'travel_id',
    ];

    function travel(){
        return $this->belongsTo(Travel::class);
    }
}
