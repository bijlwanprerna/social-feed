<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
                        'user_id',
                        'follow_user_id'
                    ];
                    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followingUser()
    {
        return $this->belongsTo(User::class, 'follow_user_id');
    }
}
