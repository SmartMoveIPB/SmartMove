<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class VehicleController extends Controller
{
    // index
    public function index(): Response
    {
        $vehicles = Vehicle::all();

        return Inertia::render('kendaraan/create',[
            'vehicles' => $vehicles
        ]);
    }

    public function commuterIndex(): Response
    {
        $commuters = Vehicle::where('type','commuter');

        return Inertia::render('kendaraan/commuter',[
            'commuters' => $commuters
        ]);
    }

    public function busIndex(): Response
    {
        $bis = Vehicle::where('type','bis');

        return Inertia::render('kendaraan/bis',[
            'bis' => $bis
        ]);
    }

    public function angkotIndex(): Response
    {
        $angkot = Vehicle::all();

        return Inertia::render('kendaraan/angkot',[
            'angkot' => $angkot
        ]);
    }

    // detail
    public function detail(String $id): Response
    {
        $vehicle = Vehicle::where('id', $id);

        return Inertia::render('kendaraan/create',[
            'vehicle' => $vehicle
        ]);
    }



    // postComplaint
    public function postComplaint(): RedirectResponse {
        
    }
}
