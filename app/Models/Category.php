<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name', 'slug'];
    protected $fillable = [
        'name',
        'image',
        'slug'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getProducts($id)
    {
        $category = self::find($id);

        if (!$category) {
            return collect([]);
        }

        return $category->products;
    }
}
