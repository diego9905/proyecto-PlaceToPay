<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillProduct extends Model
{
    protected $table = "bills_products";
    protected $primaryKey = "id_products_bills";

    protected $fillable = ["id_products_bills", "unit_price", "product_quantity", "total_products_value"];

    public function bills()
    {
        return $this->hasMany('App\Modelos\Bill.php', "id_bills");
    }

    public function products()
    {
        return $this->hasMany('App\Modelos\Product.php', "id_products");
    }
    //
}
