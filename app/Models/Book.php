<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model Book -m
class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'barcode',
        'title',
        'author',
        'edition',
        'area',
        'publishing_house',
        'comment',
        'quantity',
        'origin',
    ];
}
