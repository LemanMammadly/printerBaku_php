<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slider extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['title','description','link_btn'];

    protected $fillable = [
        'title',
        'description',
        'link_url',
        'link_btn',
        'image'
    ];
}
