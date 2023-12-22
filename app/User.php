<?php

namespace Logit;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider',
        'provider_id',
        'name', 
        'first_time',
        'email', 
        'gender',
        'password', 
        'verified',
        'yob', 
        'goal', 
        'avatar',
        'country',
        'timezone',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function settings() : HasOne {
        return $this->hasOne('Logit\Settings');
    }
}
