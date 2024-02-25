<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    // use HasFactory;

    ## table add
    protected $table = 'orders';

    ## primaryKey add
    protected $primaryKey = "id";

    protected $fillable =
    [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'zip_code',
        'state_country',
    ];
}
