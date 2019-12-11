<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table ="users";
    protected $fillable =["id_users","name","password","nickname","email","address","phone","identification_card"];

    public function bills(){
        return $this-> belongsTo('App\Bill.php',"id_users");
    }

    public function countries(){
        return $this-> belongsTo('App\Country.php',"id_users");
    }

    public function cities(){
        return $this-> belongsTo('App\City.php',"id_users");
    }


}
