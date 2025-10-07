<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{

    protected $table = 'dishes';
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'category',
    ];
    public function tables()
    {
        return $this->belongsToMany(Table::class, 'tables_dishes', 'dish_id', 'table_id')
            ->withPivot('quantity', 'confirmed')
            ->withTimestamps();
    }
}
