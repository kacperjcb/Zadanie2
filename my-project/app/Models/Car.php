<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand', 'model'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class)->withPivot('start_date', 'end_date');
    }
}
