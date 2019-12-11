<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $fillable = ["id_countries","name"];

    public function users(){
        return $this->hasMany('App\User.php', "id_users");
    }

    //
}
