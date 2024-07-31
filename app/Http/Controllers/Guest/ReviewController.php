<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // create
    public function create(): Response
    {
        return Inertia::render('kendaraan/create');
    }

    // post
    public function post(): RedirectResponse {
        

    }
}
