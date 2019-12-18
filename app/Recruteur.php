<?php

namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Recruteur extends Authenticatable
{
    protected $fillable = [
        'nom','type', 'email', 'password','num_tel'
    ];
    use Notifiable;
    protected $guard='recruteur';
    protected $hidden = [
        'password', 'remember_token'
    ];
    //
}
