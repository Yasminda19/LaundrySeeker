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
        'laundry_id', 'name', 'harga'
    ];
}

