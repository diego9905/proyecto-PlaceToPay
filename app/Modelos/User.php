<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table ="users";
    protected $fillable =["id_users","name","email","address","phone","identification_card"];

    public function bills(){
        return $this-> belongsTo('App\Modelos\Bill.php',"id_users");
    }

    public function countries(){
        return $this-> belongsTo('App\Modelos\Country.php',"id_users");
    }

    public function cities(){
        return $this-> belongsTo('App\Modelos\City.php',"id_users");
    }


}
