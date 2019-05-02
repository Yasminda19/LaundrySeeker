<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'paket_id', 'qty'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function paket()
    {
        return $this->belongsTo('App\Paket');
    }
}
