<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['order_number','product_name'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
