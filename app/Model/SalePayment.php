<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalePayment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'sale_id', 'amount', 'mode_of_pay', 'transaction_id'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function sale()
    {
        return $this->belongsTo('App\Model\Sale', 'id', 'sale_id');
    }

    
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
