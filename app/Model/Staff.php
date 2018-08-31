<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'first_name', 'last_name', 'email', 'password'
    ];

    public function vendor()
    {
        return $this->hasMany('App\Model\Vendor', 'product_id', 'id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;

    protected $dates = ['deleted_at'];
}
