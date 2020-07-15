<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function mortgagecalculator()
    {
        return $this->belongsTo(MortgageCalculator::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
