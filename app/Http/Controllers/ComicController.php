<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John Doe',
            'age' => 67,
        ];
        
        return Inertia::render('Comics', $data);
    }
}