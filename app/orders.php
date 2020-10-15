<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $table = "orders";
    public $timestamps = false;


    public function orders_items(){
        return $this->belongsTo('app\orders_items','order_id','id');
    }
    public function product()
    {
        return $this->belongsToMany('App\products', 'orders_items', 'order_id', 'product_id')->withPivot([
            'quantity',
            'total',
        ]);
    }
    public function getstatus()
    {
        return $this->belongsTo('App\status', 'id_stt', 'id');
    }
}
