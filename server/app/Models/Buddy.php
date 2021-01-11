<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buddy extends Model
{
    use HasFactory;
    
    protected $fillable = ['name','batch','api_key','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
