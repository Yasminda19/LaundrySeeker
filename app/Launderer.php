<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Launderer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'lokasi'
    ];

    protected $primaryKey = "user_id";

    public $incrementing = False;
    
    public function pakets()
    {
        return $this->hasMany('App\Paket', 'launderer_id');
    }
}
