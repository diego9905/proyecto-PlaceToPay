<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    protected $fillable = ["id_bills","date","state","detail","total","iva","subtotal"];

    public function clients(){
        return $this->hasMany('App\Modelos\Client.php', "id_clients");
    }
    public function sellers(){
        return $this->hasMany('App\Modelos\Seller.php', "id_sellers");
    }
    public function bills_products(){
        return $this-> belongsTo('App\Modelos\BillProduct.php',"id_bills");
    }
}
