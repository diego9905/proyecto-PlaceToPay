<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "id_products";
    protected $table = "products";
    protected $fillable = [
        "id_products",
        "reference",
        "price",
        "description"
    ];

    public function bills()
    {
        return $this->belongsToMany(Bill::class);
    }


    public function bills_products()
    {
        return $this->belongsTo('App\Modelos\BillProduct.php', "id_products");
    }
    //
}
