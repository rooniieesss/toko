<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Team extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'team_name';

    public function events()
    {
        return $this->hasMany('App\Event', 'team_name', 'team_name');
    }
}
