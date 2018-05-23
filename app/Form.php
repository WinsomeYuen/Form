<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $connection = 'mysql';
    protected $table = 'form';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'mobile',
        'dob',
        'gender',
        'comments'
    ];
}
