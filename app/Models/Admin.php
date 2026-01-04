<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';

    protected $fillable = [
        'account',
        'password'
    ];

    public function patients(){
        return $this->hasMany(Patients::class, 'admin_id', 'admin_id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class, 'admin_id', 'admin_id');
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class, 'admin_id', 'admin_id');
    }

}


