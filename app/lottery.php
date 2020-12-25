<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lottery extends Model
{
    protected $fillable = [
        'st1_prize', 'nd2_prize_1', 'nd2_prize_2','nd2_prize_3','Last_2'
    ];
}
