<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ["id_products", "quantity","price"];

    public function bills_products(){
        return $this-> belongsTo('App\Modelos\BillProduct.php',"id_products");
    }
}
