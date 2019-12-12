<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $table = "cities";
   protected $fillable = ["id_cities","name"];

    public function clients(){
        return $this->hasMany('App\Modelos\Client.php', "id_clients");
    }
}
