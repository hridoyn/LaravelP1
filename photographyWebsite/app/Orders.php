<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable=['name','packagename','package_id','description','company_id','delivered','user_id','created_at','updated_at','price'];

    public function packages(){
        return $this->hasMany('app/Package');
    }


    public function user(){
        return $this->belongsTo('app/User','user_id');
    }
}
