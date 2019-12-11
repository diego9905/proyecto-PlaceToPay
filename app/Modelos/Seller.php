<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = "sellers";
    protected $fillable = ["id_sellers","name","nickname","password","nit","address","phone","city","email"];

    public function bills(){
        return $this-> belongsTo('App\Modelos\Bill.php',"id_sellers");
    }
}
