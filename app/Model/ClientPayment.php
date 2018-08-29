<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClientPayment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'client_id', 'amount', 'mode_of_pay', 'date_from', 'date_to'
    ];

    public function client()
    {
        return $this->belongsTo('App\Model\Client', 'id', 'client_id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;
}
