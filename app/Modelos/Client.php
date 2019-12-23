<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = "id_clients";
    protected $table = "clients";
    protected $fillable = [
        "id_clients",
        "name",
        "last_name",
        "email",
        "address",
        "phone",
        "city",
        "identification_card"
    ];

    public function bills()
    {
        return $this->belongsTo('App\Modelos\Bill.php', "id_clients");
    }

    public function cities()
    {
        return $this->hasMany('App\Modelos\City', "id_cities");
    }

}
