<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static $rules=[
        'title' => 'required|max:255',
        'description' => 'required|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'price' => 'required|numeric',
        'quantity' => 'required|numeric',
    ];
    public function pharmacies()
    {
        return $this->belongsToMany(Pharmacy::class);
    }
}
