<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = "bills";
    protected $primaryKey = "id_bills";

    protected $fillable = [
        "id_bills",
        "generated_bill",
        "delivered_bill",
        "overdue_bill",
        "company_name",
        "state",
        "detail",
        "total",
        "iva",
        "subtotal"
    ];

    public function sellers()
    {
        return $this->hasMany('App\Seller.php', "id_sellers");
    }

    public function clients()
    {
        return $this->hasMany(Client::class, "id_clients");
    }

    public function bills_products()
    {
        return $this->belongsTo('App\Modelos\BillProduct.php', "id_bills");
    }

    public function states()
    {
        return $this->hasMany('App\Modelos\State.php.php', "id_states");
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot(['unit_price', 'product_quantity', 'total_products_value']);
    }

    public function scopeSearchbytype($query, $type, $search) {
        if( ($type) && ($search) ) {
            return $query->where($type,'like',"%$search%");
        }
    }

    //
}
