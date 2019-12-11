<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillProduct extends Model
{

    protected $table = "bills_products";
    protected $fillable = ["id_products_bills","unit_value"];

    public function bills(){
        return $this->hasMany('App\Bill.php', "id_bills");
    }
    public function products(){
        return $this->hasMany('App\Product.php', "id_products");
    }
}
