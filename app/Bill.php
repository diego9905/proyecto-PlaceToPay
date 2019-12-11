<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    protected $fillable = ["id_bills","date","state","detail","total","iva","subtotal"];

    public function users(){
        return $this->hasMany('App\User.php', "id_users");
    }
    public function sellers(){
        return $this->hasMany('App\Seller.php', "id_sellers");
    }
    public function bills_products(){
        return $this-> belongsTo('App\BillProduct.php',"id_bills");
    }
}
