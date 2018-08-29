<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'company', 'email', 'phone'
    ];

    public function payment()
    {
        return $this->hasMany('App\Model\ClientPayment', 'client_id', 'id');
    }

    public function customer()
    {
        return $this->hasMany('App\Model\Customer', 'client_id', 'id');
    }

    public function expense()
    {
        return $this->hasMany('App\Model\Expenses', 'client_id', 'id');
    }

    public function notification()
    {
        return $this->hasMany('App\Model\Notifications', 'client_id', 'id');
    }

    public function product()
    {
        return $this->hasMany('App\Model\Product', 'client_id', 'id');
    }

    public function productCategory()
    {
        return $this->hasMany('App\Model\ProductCategory', 'client_id', 'id');
    }

    public function productVendor()
    {
        return $this->hasMany('App\Model\ProductVendor', 'client_id', 'id');
    }

    public function sale()
    {
        return $this->hasMany('App\Model\Sale', 'client_id', 'id');
    }

    public function salePayment()
    {
        return $this->hasMany('App\Model\SalePayment', 'client_id', 'id');
    }

    public function saleProducts()
    {
        return $this->hasMany('App\Model\SaleProducts', 'client_id', 'id');
    }

    public function staff()
    {
        return $this->hasMany('App\Model\Staff', 'client_id', 'id');
    }

    public function vendor()
    {
        return $this->hasMany('App\Model\Vendor', 'client_id', 'id');
    }

    public function vendorPayment()
    {
        return $this->hasMany('App\Model\VendorPayment', 'client_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
