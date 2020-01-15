<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = "cities";
    protected $fillable = [
        "id_cities",
        "name"
    ];

    public function countries()
    {
        return $this->hasMany('App\Modelos\Country.php', "id_countries");
    }

    public function clients()
    {
        return $this->belongsTo('App\Modelos\Client.php', "id_clients");
    }
    //
}
