<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $filtable = ['name', 'email','subject','message'];
}
