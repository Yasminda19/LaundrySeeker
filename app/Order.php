<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'launderer_id', 'paket_id', 'qty', 'harga', 'status_code'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function paket()
    {
        return $this->belongsTo('App\Paket', 'paket_id', 'paket_id');
    }

    public function launderer()
    {
        return $this->belongsTo('App\Launderer', 'launderer_id', 'user_id');
    }
}
