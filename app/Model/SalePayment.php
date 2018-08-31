<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SalePayment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'company_id', 'sale_id', 'amount', 'mode_of_pay', 'transaction_id'
    ];

    public function company()
    {
        return $this->belongsTo('App\Model\Company', 'id', 'company_id');
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

    protected $dates = ['deleted_at'];
}
