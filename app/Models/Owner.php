<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = 'owners';
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    public function patients(){
        return $this->hasMany(Patient::class);
    }

}
