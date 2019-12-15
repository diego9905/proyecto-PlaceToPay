<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    protected $primaryKey="id_bills";

    protected $fillable = ["id_bills","generated_bill","delivered_bill","overdue_bill","state","detail","total","iva","subtotal"];

    public function users(){
        return $this->hasMany('App\User.php', "id");
    }
    public function clients(){
        return $this->hasMany('App\Modelos\Client', "id_clients");
    }
    public function bills_products(){
        return $this-> belongsTo('App\Modelos\BillProduct.php',"id_bills");
    }
    //
}
