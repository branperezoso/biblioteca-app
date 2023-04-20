<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model Career -m
class Career extends Model
{
    use HasFactory;
    protected $fillable = [
        'key',
        'number',
        'name',
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
