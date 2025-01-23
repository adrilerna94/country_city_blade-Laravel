<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $countries = Country::all();
        return response()->json($countries, 200);
        // return view('countries.index', compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // return view('countries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request): RedirectResponse
    {
        // antes debería pasar middleware de validación
        $country = Country::create($request->all());
        return response()->json($country, 201);
        // return redirect()->route('countries.index')
        //                  ->with('success', 'Country created sucessfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country): View
    {
        $country = Country::findOrFail($country->Code);
        return response()->json($country, 200);
        // return view('countries.show', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country): View
    {
        // return view('countries.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country): RedirectResponse
    {
        // Previamente validado en el middleware
        $updatedCountry = $country->update($request->all());
        return response()->json($updatedCountry, 200);
        /* return redirect()->route('countries.index')
                            ->with('success', 'Product updated successfully');
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country): RedirectResponse
    {
        $country->delete();
        return response()->noContent();
        /* return redirect()->route('countries.index')
                            ->with('success', 'Country deleted successfully');
        */
    }
}
