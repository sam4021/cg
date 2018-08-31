<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notifications extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id', 'company_id', 'message'
    ];

    public function company()
    {
        return $this->belongsTo('App\Model\Company', 'id', 'company_id');
    }

    /**
    * Indicates if the IDs are auto-incrementing.
    *
    * @var bool
    */
    public $incrementing = false;

    protected $dates = ['deleted_at'];
}
