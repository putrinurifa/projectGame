<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'skor',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function getByName($name)
    {
        return User::where([
            'name' => $name
        ])->first();
    }

    public static function getAll()
    {
        return User::where([
            'role' => 'player'
        ])->orderBy('skor', 'desc')->get();
    }

    public static function leaderboard()
    {
        return User::where([
            'role' => 'player'
        ])->orderBy('skor', 'desc')->paginate(10);
    }
}
