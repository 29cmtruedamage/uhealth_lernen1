<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diseases extends Model
{
    protected $table = 'diseases';
    protected $primaryKey = 'disease_id';
    protected $fillable = [
        'name',
        'description',
        'icd_code'
    ];

    public function patients(){
        return $this->belongsToMany(Patient::class, 'patients_diseases', 'disease_id', 'patient_id')
            ->withPivot('diagnosis_date');
    }

    public function treatments()
    {
        return $this->hasMany(Treatment::class, 'disease_id', 'disease_id');
    }
}
