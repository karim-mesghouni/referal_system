<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'points_awarded'];


    /// Relationship
    public function points()
    {
        return $this->hasMany(Point::class);
    }
}
