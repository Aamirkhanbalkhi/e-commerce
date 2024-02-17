<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    // use HasFactory;

    protected $table = 'sellers';

    protected $fillable = [
        'seller_name',
        'seller_email',
        'seller_phone',
        'seller_storename',
        'seller_address',
        'seller_products',
        'seller_city',
        'seller_state',
        'account_creation_date',
        'status',
    ];
}
