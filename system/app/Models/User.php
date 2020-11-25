<?php

namespace App\Models;
use App\Models\produk;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;

class User extends Authenticatable
{

    use  Notifiable;
    function detail(){
    	return $this-> hasone(UserDetail::class, 'id_user');
    }
    function produk(){
    	return $this->hasMany(produk::class, 'id_user');
    }

}
