<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable=['name','description','company_id','created_at','updated_at','price'];

    public function company(){
        return $this->belongsTo('app\Company');
    }

    public function order(){
        return $this->belongsTo('app\Orders');
    }


}