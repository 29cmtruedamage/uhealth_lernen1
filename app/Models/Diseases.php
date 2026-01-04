<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    protected $table = 'diseases';

    protected $fillable = ['name', 'description', 'icd_code'];

    public function patients(){
        return $this->belongsToMany(Patient::class, 'patient_diseases', 'disease_id', 'patient_id')
            ->withPivot('diagnosis_date');
    }
}
