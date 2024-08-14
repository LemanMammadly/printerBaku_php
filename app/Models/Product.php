<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'view_count',
        'price',
        'discount_percent',
        'stock',
        'current_stock',
        'slug',
        'category_id',
    ];
}
