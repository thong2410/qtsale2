<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $table = "products";
    public $timestamps = false;
    protected $primaryKey = 'product_id';

    public function type_product(){
        return $this->belongsTo('app\type_product','id_type','type_product');
    }
}
