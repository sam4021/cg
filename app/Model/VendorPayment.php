<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorPayment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'vendor_id', 'amount', 'mode_of_pay', 'transaction_id'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Model\Vendor', 'vendor_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
