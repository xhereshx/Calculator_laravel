<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxformdetail extends Model
{
    public function taxform()
    {
        return $this->belongsTo(Taxform::class,'page_id','uid')
                    ->orderBy('sort', 'DESC');
        //return $this->belongsTo('App\User', 'foreign_key', 'owner_key');
    }
    protected $table = '06_forms_detail';
    protected $primaryKey = 'uid';
}
