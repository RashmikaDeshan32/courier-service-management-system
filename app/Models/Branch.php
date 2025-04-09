<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $table = 'branches';
    protected $primaryKey = 'branch_id';

    protected $fillable = [
         'city', 'street','postal_code','contact_number','email', 'province_id', 'district_id','status',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
