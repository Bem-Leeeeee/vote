<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected  $table = 'user';

    protected $fillable = ['id', 'name', 'idCard', 'voteCount', 'director', 'president', 'vpresident', 'secretary', 'supervisor', 'supervisors'];

    public $timestamps = false;

    public function history()
    {
        return $this->hasMany('App\history', 'userid');
    }
}
