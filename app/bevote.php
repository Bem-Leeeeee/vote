<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bevote extends Model
{
    //
    protected  $table = 'bevote';

    protected $fillable = ['id', 'name', 'type', 'typename', 'agree', 'disagree', 'waiver', 'company', 'department', 'class'];

    public $timestamps = false;

}
