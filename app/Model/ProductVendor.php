<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVendor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'product_id', 'vendor_id', 'cost'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Model\Product', 'id', 'product_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Model\Vendor', 'id', 'vendor_id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
