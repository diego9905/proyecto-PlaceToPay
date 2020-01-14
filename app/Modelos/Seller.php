<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = "sellers";
    protected $primaryKey = "id_sellers";
    protected $fillable = [
        "id_sellers",
        "first_name",
        "last_name",
        "nit",
        "address",
        "phone",
        "city",
        "email"
    ];

    public function users()
    {
        return $this->hasMany('App\Modelos\User.php', "id");
    }
    public function bills()
    {
        return $this->belongsTo('App\Modelos\Bill.php', "id_sellers");
    }

}
