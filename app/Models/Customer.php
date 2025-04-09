<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'first_name', 'last_name', 'mobile','street','city','postal_code','id_number',
    ];
}
