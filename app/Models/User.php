<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['фамилия', 'имя', 'отчество', 'пол', 'ДР', 'логин', 'пароль', 'email', 'роль'];

    public function role()
    {
        return $this->belongsTo(Role::class, 'роль');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'пользователь');
    }

    public function checks()
    {
        return $this->hasMany(Check::class, 'пользователь');
    }
}
