<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use App\Profile;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname' ,'email', 'admin','password', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($user){
            $user->profile()->create([
                'address' => $user->username,
            ]);
        
        });
    }

    public function posts()
    {
        return $this->hasMany(Post::class)->orderBy('created_at','desc');
    }

    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    public function isAdmin(){
        return ($this->admin == 1);
    }
}