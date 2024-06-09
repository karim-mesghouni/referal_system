<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;


    protected $fillable = ['client_id', 'points_earned', 'action_id'];




    /// Relationship
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function action()
    {
        return $this->belongsTo(Action::class);
    }


}
