<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'round_time',
        'machine_id',
        'team_name',
    ];

    public function team()
    {
        return $this->belongsTo('App\Team', 'team_name', 'team_name');
    }

    // public function round()
    // {
    //  return $this->belongsTo('App\Round', 'event_id');
    // }
}