<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//php artisan make:model Loan -m
class Loan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class);
    }
}
