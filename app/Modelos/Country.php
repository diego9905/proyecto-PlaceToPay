<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $fillable = ["id_countries","name"];

    public function users(){
        return $this->hasMany('App\Modelos\User.php', "id_users");
    }

    //
}
