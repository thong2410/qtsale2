<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";
    public $timestamps = true;
    protected $primaryKey = 'commnet_id';

    // public function products(){
    //     return $this->belongsTo('app\products','product_id','products');
    // }
}
