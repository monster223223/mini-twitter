<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    protected $fillable = [
        'user_email_1', 'user_email_2', 'tweet_text', 'tweet_id'
      ];
}
