<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class tweet extends Model
{
    protected $fillable = [
        'tweet_text', 'user_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
