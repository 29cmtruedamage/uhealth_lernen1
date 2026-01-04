<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

     protected $table ='bookings';

     protected $fillable = [
        'admin_id',
        'time_slot_start',
        'time_slot_end',
        'status',
     ];

     public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id','admin_id');
     }

    public function patient(){
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class, 'booking_id', 'booking_id');
    }
}
