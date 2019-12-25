<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // protected $guarded=[];
    
    protected $fillable =['nim','alamat','phone','name','email','password','role'];
    // protected $hidden =['password'];
}
