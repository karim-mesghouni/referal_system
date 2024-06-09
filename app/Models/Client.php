<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    use HasApiTokens , HasFactory;

    protected $fillable = ['first_name', 'last_name','email','password', 'RS_points'];



    /// Relationship
    public function points()
    {
        return $this->hasMany(Point::class);
    }

}
