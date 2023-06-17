<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'position'];

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function cars()
    {
        return $this->belongsToMany(Car::class)->withPivot('start_date', 'end_date');
    }
}
