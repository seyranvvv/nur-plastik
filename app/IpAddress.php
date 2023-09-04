<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IpAddress extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;

    public function visitors()
    {
        return $this->hasMany(Visitor::class)
            ->orderBy('updated_at', 'desc');
    }


    public function loginAttempt()
    {
        return $this->hasMany(LoginAttempt::class)
            ->orderBy('created_at', 'desc');
    }
}
