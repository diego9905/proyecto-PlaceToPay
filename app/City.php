<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
   protected $table = "cities";
   protected $fillable = ["id_cities","name"];

    public function users(){
        return $this->hasMany('App\User.php', "id_users");
    }
}
