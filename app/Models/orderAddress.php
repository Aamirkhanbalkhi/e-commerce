<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class orderAddress extends Model
{
    // use HasFactory;

    ## Add Table
    protected $table = 'order_address';

    ## Add primaryKey
    protected $primaryKey = "id";

    protected $fillable =
    [
        'user_id',
        'order_id',
        'address',
    ];

    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        ## creating event par hook laga kar order_id ko manually set karna
        static::creating(function ($orderAddress) {

            $orderAddress->order_id = Str::uuid();
        });
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
