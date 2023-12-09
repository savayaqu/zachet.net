<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['название', 'цена', 'количество на складе', 'фото', 'описание товара', 'категория'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'категория');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'товар');
    }

    public function checklists()
    {
        return $this->hasMany(Checklist::class, 'товар');
    }
}
