<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model Student -m
class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'ncontrol',
        'name',
        'career_id',
    ];
    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}
