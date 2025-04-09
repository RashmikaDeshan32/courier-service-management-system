<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    //public $timestamps = false;
    protected $table = 'packages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name', 'last_name', 'gender','city','street','contact_number',
    ];

    public function getRouteKeyName()
    {
        return 'staff_id';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
