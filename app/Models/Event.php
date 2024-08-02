<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['category_id','title' , 'description' , 'price' ,'dispo' ];

    public function category()
    {
        return $this->belongTo(Category::class);
    }
}