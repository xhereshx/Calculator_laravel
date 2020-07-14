<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxform extends Model
{
    public function taxformdetails()
    {
        return $this->hasMany(Taxformdetail::class,'page_id','uid');
    }
    protected $table = '06_forms';
    protected $primaryKey = 'uid';
}
