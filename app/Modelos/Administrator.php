<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    protected $table = "users";
    protected $primaryKey = "id_administrators";

    protected $fillable = [
        'name',
        'email_address',
        'password',
        'confirm_password'
    ];

    public function users()
    {
        return $this->belongsTo('App\Modelos\User.php', "id_administrators");
    }



}
