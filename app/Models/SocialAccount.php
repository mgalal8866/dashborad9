<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SocialAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'provider_name', 'provider_id'
    ];

    // User
    public function user(){
        return $this->belongsTo(User::class);
    }
       // User
       public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
