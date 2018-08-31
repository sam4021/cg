<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'name', 'email', 'phone'
    ];

    public function payment()
    {
        return $this->hasMany('App\Model\ClientPayment', 'company_id', 'id');
    }

    public function customer()
    {
        return $this->hasMany('App\Model\Customer', 'company_id', 'id');
    }

    public function expense()
    {
        return $this->hasMany('App\Model\Expenses', 'company_id', 'id');
    }

    public function notification()
    {
        return $this->hasMany('App\Model\Notifications', 'company_id', 'id');
    }

    public function product()
    {
        return $this->hasMany('App\Model\Product', 'company_id', 'id');
    }

    public function productCategory()
    {
        return $this->hasMany('App\Model\ProductCategory', 'company_id', 'id');
    }

    public function productVendor()
    {
        return $this->hasMany('App\Model\ProductVendor', 'company_id', 'id');
    }

    public function sale()
    {
        return $this->hasMany('App\Model\Sale', 'company_id', 'id');
    }

    public function salePayment()
    {
        return $this->hasMany('App\Model\SalePayment', 'company_id', 'id');
    }

    public function saleProducts()
    {
        return $this->hasMany('App\Model\SaleProducts', 'company_id', 'id');
    }

    public function vendor()
    {
        return $this->hasMany('App\Model\Vendor', 'company_id', 'id');
    }

    public function vendorPayment()
    {
        return $this->hasMany('App\Model\VendorPayment', 'company_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;

    protected $dates = ['deleted_at'];
}
