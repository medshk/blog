<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Candidate extends Authenticatable
{
    protected $fillable = [
        'nom','prenom', 'email', 'password','num_tel','date_naissance'
    ];
    use Notifiable;

    protected $guard='candidate';

    protected $hidden = [
        'password', 'remember_token'
    ];
    //
}
