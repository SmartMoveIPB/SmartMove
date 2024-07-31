<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class VehicleController extends Controller
{
    //index
    public function index(): Response
    {
        return Inertia::render('kendaraan');
    }

    // create
    public function create(): Response
    {
        return Inertia::render('kendaraan/create');
    }

    // post
    public function post(): RedirectResponse {
        

    }

    // edit
    public function edit(String $id): Response
    {
        return Inertia::render('kendaraan/edit');
    }

    // update
    public function update(): RedirectResponse {
        
    }


    // destroy

}
