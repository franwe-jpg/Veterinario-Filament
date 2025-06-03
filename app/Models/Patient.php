<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $table = 'patients';
    protected $fillable= [
        'name',
        'date_of_birth',
        'type',
        'owner_id',
    ];

    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    public function treatments(){
        return $this->hasMany(Treatment::class);
    }
}
