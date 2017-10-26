<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected  $table = 'history';

    protected $fillable = ['id', 'userid', 'votedid', 'type', 'state'];

    public $timestamps = false;

    public function voted()
    {
        return $this->hasOne('App\user', 'id', 'votedid');
    }
}
