<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $fillable = ["id_countries","name"];

    public function clients(){
        return $this->hasMany('App\Modelos\Client.php', "id_clients");
    }

    //
}
