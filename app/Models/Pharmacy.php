<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $rules=[
        'name' => 'required|max:255',
        'address' => 'required|max:255',
        'profit_margin' => 'required|integer|between:1,30',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
