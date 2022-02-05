<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable=[
        'nit',
        'cedula',
        'business_name',
        'property_name',
        'name',
        'lastname1',
        'lastname2',
        'address',
        'phone_number1',
        'phone_number2',
        'fax',
        'email',
    ];
}
