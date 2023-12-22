<?php

namespace Logit;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Settings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id',
        'timezone',
        'unit',
        'recap',
        'share_workouts',
        'accept_friends',
        'strict_previous_exercise',
        'count_warmup_in_stats',
        'strict_notes',
        'use_timer',
        'timer_play_sound',
        'timer_direction',
        'timer_seconds',
        'timer_minutes',
    ];

    public function user() : BelongsTo {
        return $this->belongsTo('Logit\User');
    }
}
