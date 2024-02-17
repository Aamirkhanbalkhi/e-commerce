<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    //  table
    protected $table = 'banners';

    // filable value

    protected $fillable = [
        'image',
        'heading',
        'title',
        'decs',
        'status',
    ];
}
