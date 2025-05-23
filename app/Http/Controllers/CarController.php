<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = User::find(1)
            ->cars()
            ->orderBy('created_at', 'desc')
            ->get();

        return view('car.index', [
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        return view('car.show', [
            'car' => $car,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::where('published_at', '!=', null)
            ->with(['primaryImages', 'city', 'carType', 'fuelType', 'maker', 'model'])
            ->orderBy('published_at', 'desc');

        $cars = $query->paginate(12);

        return view('car.search', [
            'cars' => $cars
        ]);
    }

/*************  ✨ Windsurf Command ⭐  *************/
/*******  98ef35ed-966d-48fa-89b8-49c5861acda7  *******/
    public function watchlist()
    {
        $cars = User::find(1)
            ->favoriteCars;


        return view('car.watchlist', [
            'cars' => $cars,
        ]);
    }
}
