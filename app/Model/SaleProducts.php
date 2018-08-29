<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SaleProducts extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'sale_id', 'product_id', 'price', 'cost', 'imei', 'quantity'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function sale()
    {
        return $this->belongsTo('App\Model\Sale', 'id', 'sale_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'id', 'product_id');
    }

    
    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
