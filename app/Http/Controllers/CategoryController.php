<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController
{
    public function show(Category  $category){
        $events = $category->events;

        return view('categories.show' , compact('category' , 'events'));
    }
}