<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table ='patients';

    protected $fillable = [
        'admin_id',
        'name',
        'medical_history',
        'age',
        'sex',
        'password',
        'email',
        'location',
        'desease',
    ];

    public function admin(){
        return $this->belongsTo(Admin::class, 'admin_id','admin_id');
    }

    public function bookings(){
        return $this->hasMany(Booking::class, 'patient_id', 'patient_id');
    }

    public function diseases(){
        return $this->belongsToMany(Disease::class, 'patient_diseases', 'patient_id', 'disease_id')
            ->withPivot('diagnosis_date');
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class, 'patient_id', 'patient_id');
    }


}
