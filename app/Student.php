<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = ['fname','lname','age','emailadress','gender','address','status','profilepic','documents'];
}
