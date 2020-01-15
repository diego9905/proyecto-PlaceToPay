<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey = "id_states";
    protected $table = "states";
    protected $fillable = [
        "id_states",
        "name"
    ];

    public function bills()
    {
        return $this->belongsTo('App\Modelos\Bill.php', "id_states");
    }

}
