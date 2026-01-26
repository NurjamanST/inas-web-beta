<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Account extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'accounts';
    protected $primaryKey = 'account_id';
    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'role_id');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id','institution_id');
    }
}
