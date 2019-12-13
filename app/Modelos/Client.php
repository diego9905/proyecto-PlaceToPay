<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table ="clients";
    protected $fillable =["id_clients","name","email","address","phone","identification_card"];

    public function bills(){
        return $this-> belongsTo('App\Modelos\Bill.php',"id_clients");
    }

    public function countries(){
        return $this-> belongsTo('App\Modelos\Country.php',"id_clients");
    }

    public function cities(){
        return $this-> belongsTo('App\Modelos\City.php',"id_clients");
    }
    //
}
