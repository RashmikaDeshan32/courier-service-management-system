<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    //public $timestamps = false;
    protected $table = 'staffs';
    protected $primaryKey = 'staff_id';

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

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

}
