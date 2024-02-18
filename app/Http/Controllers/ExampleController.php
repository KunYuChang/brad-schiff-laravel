<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// php artisan make:controller ExampleController

class ExampleController extends Controller
{
    public function homepage()
    {
        $ourName = 'Brad';
        $animals = ['Meowsalot', 'Barksalot', 'Purrsloud'];

        return view('homepage', ['allAnimals' => $animals, 'name' => $ourName, 'catname' => 'Meowsalot']);
    }

    public function about()
    {
        return view('about');
    }
}