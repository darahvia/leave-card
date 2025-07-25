<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingEarnedCredits extends Model
{

    protected $table = 'teaching_earned_credits';

    protected $fillable = [
        'customer_id',
        'earned_date',
        'special_order',
        'days',
        'reference',
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
