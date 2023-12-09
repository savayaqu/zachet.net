<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['пользователь', 'товар', 'цена товара', 'количество'];

    public function user()
    {
        return $this->belongsTo(User::class, 'пользователь');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'товар');
    }
}
