<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MortgageCalculator extends Model
{
    protected $table = 'mortgage_calculators';

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
