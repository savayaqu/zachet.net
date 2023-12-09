<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    use HasFactory;
    protected $fillable = ['пользователь', 'дата/время'];

    public function user()
    {
        return $this->belongsTo(User::class, 'пользователь');
    }

    public function checklists()
    {
        return $this->hasMany(Checklist::class, 'чек');
    }
}
