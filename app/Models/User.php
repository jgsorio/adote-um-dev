<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function interest(): HasOne
    {
        return $this->hasOne(Interest::class);
    }

    public function receiveActions(): HasMany
    {
        return $this->hasMany(Action::class, 'from_user_id', 'id');
    }

    public function sentActions(): HasMany
    {
        return $this->hasMany(Action::class, 'to_user_id', 'id');
    }

    public function receiveMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'from_user_id', 'id');
    }

    public function sentMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'to_user_id', 'id');
    }
}
