<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use SoftDeletes,Notifiable;

    protected $fillable = [
        'id', 'client_id', 'customer_id', 'status'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer', 'id', 'customer_id');
    }

    public function payment()
    {
        return $this->hasMany('App\Model\SalePayment', 'sale_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Model\SaleProducts', 'sale_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
