<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_email_1', 'user_email_2',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
