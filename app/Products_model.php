<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products_model extends Model
{
    protected $table='products';
    protected $primaryKey='id';
    protected $fillable=['pro_name','pro_code','pro_disc','pro_price','image','pro_info','spl_price','stock','category_id','pro_popular'];

}
