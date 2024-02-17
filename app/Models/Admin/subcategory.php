<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subcategory extends Model
{
    use HasFactory;

    // Table Name
    protected $table = 'subcategory';

    // Primary key
    protected $primaryKey = "id";

    // Fillable columns
    protected $fillable = [
        'category_id',
        'sub_category_name',
        'sub_category_slug',
        'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $originalSlug = Str::slug($model->sub_category_name);
            $model->sub_category_slug = $originalSlug;

            $count = 1;
            while (self::where('sub_category_slug', $model->sub_category_slug)->where('id', '!=', $model->id)->exists()) {
                $model->sub_category_slug = $originalSlug . '-' . $count;
                $count++;
            }
        });

        static::updating(function ($model) {
            if ($model->isDirty('sub_category_name')) {
                $originalSlug = Str::slug($model->sub_category_name);
                $model->sub_category_slug = $originalSlug;

                $count = 1;
                while (self::where('sub_category_slug', $model->sub_category_slug)->where('id', '!=', $model->id)->exists()) {
                    $model->sub_category_slug = $originalSlug . '-' . $count;
                    $count++;
                }
            }
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
