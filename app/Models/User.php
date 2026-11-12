<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar_photo',
        'birth_date',
        'registration_date',
        'is_active',
        'is_admin',
        'is_premium',
        'phone_number',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birth_date' => 'date',
            'registration_date' => 'date',
            'is_active' => 'boolean',
            'is_admin' => 'boolean',
            'is_premium' => 'boolean',
        ];
    }


    public function publications(): HasMany
    {
        return $this->hasMany(Publication::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


    public function likes(): HasMany
    {
        return $this->hasMany(Like::class);
    }

    public function initiatedNotifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'user_id_initiator');
    }

    public function receivedNotifications(): HasMany
    {
        return $this->hasMany(Notification::class, 'user_id_target');
    }
}
