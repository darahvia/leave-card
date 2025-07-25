<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teaching extends Model
{

    // Explicitly specify the table name
    protected $table = 'teaching';

    protected $fillable = [
        'surname',
        'given_name', 
        'middle_name',
        'sex',
        'civil_status',
        'date_of_birth',
        'place_of_birth',
        'position',
        'name_of_school',
        'permanency',
        'customer_number',
        'salary',
        'leave_credits'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'salary' => 'decimal:2',
        'leave_credits' => 'decimal:2'
    ];

    // Relationship with leave applications
    public function leaveApplications()
    {
        return $this->hasMany(TeachingLeaveApplications::class, 'customer_id');
    }
}