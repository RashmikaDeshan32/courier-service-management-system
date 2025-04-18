<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $table = 'Districts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 
    ];

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
}
