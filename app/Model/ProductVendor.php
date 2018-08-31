<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVendor extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'company_id', 'product_id', 'vendor_id', 'cost'
    ];

    public function company()
    {
        return $this->belongsTo('App\Model\Company', 'id', 'company_id');
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

    protected $dates = ['deleted_at'];
}
