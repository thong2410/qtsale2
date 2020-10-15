<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_product extends Model
{
    protected $table = "type_product";
    protected $primaryKey = 'id_type';
    public $timestamps = false;
    public function product(){
        return $this->hasMany('app\products','idtype','idtype');
    }
}
