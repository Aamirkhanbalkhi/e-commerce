<?php

namespace App\Models\Admin;

use App\Models\wishlist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'products';

    // Primary key
    protected $primaryKey = "id";

    // Fillable value
    protected $fillable = [
        'category_id',
        'product_name',
        'reference',
        'price',
        'title',
        'description',
        'product_details',
        'status',
        'image_url_1',
        'image_url_2',
        'image_url_3',
        'image_url_4',
        'brand_id',
    ];

    static function boot()
    {
        parent::boot();

        static::creating(function ($reference) {
            $originalSlug = Str::slug($reference->product_name);
            $reference->reference = $originalSlug;

            $count = 1;
            while (Category::where('category_slug', $reference->reference)->exists()) {
                $reference->reference = $originalSlug . '-' . $count;
                $count++;
            }
        });

        static::updating(function ($reference) {
            if ($reference->isDirty('category_name')) {
                $originalSlug = Str::slug($reference->product_name);
                $reference->reference = $originalSlug;

                $count = 1;
                while (product::where('category_slug', $reference->category_slug)
                    ->where('id', '!=', $reference->id)
                    ->exists()
                ) {
                    $reference->reference = $originalSlug . '-' . $count;
                    $count++;
                }
            }
        });
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
