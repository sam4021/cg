<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vendor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'title', 'email', 'phone', 'address'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function product()
    {
        return $this->hasManyThrough('App\Model\Product', 'App\Model\ProductVendor');
    }

    public function payment()
    {
        return $this->hasMany('App\Model\VendorPayment', 'vendor_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
