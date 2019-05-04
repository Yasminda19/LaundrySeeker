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
        'user_id', 'lokasi', 'desc'
    ];

    protected $primaryKey = "user_id";

    public $incrementing = False;
    
    public function pakets()
    {
        return $this->hasMany('App\Paket', 'launderer_id');
    }

    public function orders()
    {
        return $this->hasMany('App\Order', 'launderer_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public  function scopeLike($query, $field, $value)
    {
        return $query->where($field, 'LIKE', "%$value%");
    }
}
