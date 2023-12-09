<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    use HasFactory;
    protected $fillable = ['товар', 'цена', 'количество', 'чек'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'товар');
    }

    public function check()
    {
        return $this->belongsTo(Check::class, 'чек');
    }
}
