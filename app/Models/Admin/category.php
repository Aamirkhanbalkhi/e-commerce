<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    // ...
    protected $table = 'category';

    protected $fillable = [
        'category_name',
        'category_slug',
        'status',
    ];

    static function boot()
    {
        parent::boot();

        static::creating(function ($category) {
            $originalSlug = Str::slug($category->category_name);
            $category->category_slug = $originalSlug;

            $count = 1;
            while (Category::where('category_slug', $category->category_slug)->exists()) {
                $category->category_slug = $originalSlug . '-' . $count;
                $count++;
            }
        });

        static::updating(function ($category) {
            if ($category->isDirty('category_name')) {
                $originalSlug = Str::slug($category->category_name);
                $category->category_slug = $originalSlug;

                $count = 1;
                while (Category::where('category_slug', $category->category_slug)
                    ->where('id', '!=', $category->id)
                    ->exists()
                ) {
                    $category->category_slug = $originalSlug . '-' . $count;
                    $count++;
                }
            }
        });
    }


    public function subcategory()
    {
        return $this->hasMany(subcategory::class);
    }
}
