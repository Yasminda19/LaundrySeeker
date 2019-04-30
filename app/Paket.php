<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'launderer_id', 'name', 'harga', 'desc'
    ];

    protected $primaryKey = "paket_id";

    public function launderer()
    {
        return $this->belongsTo('App\Launderer', 'launderer_id', 'user_id');
    }
}

