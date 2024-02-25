<?php

namespace App\Models;

use App\Models\Admin\product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $table = 'carts';

    // Primary key
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function wishlist()
    {
        return $this->hasMany(wishlist::class);
    }
}
