<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable=['name','email','phonenumber','user_id','id'];

    public function user(){
        return $this->belongsTo('app\User');
    }

    public function packages(){
        return $this->hasMany('app\Package');
    }
}
