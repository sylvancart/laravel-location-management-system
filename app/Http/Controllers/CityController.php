<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::where('user_id', Auth::id())
                    ->orderBy('created_at', 'desc')
                    ->get();
        
        $states = State::where('user_id', Auth::id())
                    ->where('status', 'visible')
                    ->get();
        
        return view('backend.cities.index', compact('cities', 'states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:cities',
            'state_id' => 'required|exists:states,id',
        ]);

        City::create([
            'name' => $request->name,
            'state_id' => $request->state_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('cities.index')->with('success', 'City created successfully.');
    }

    public function edit(City $city)
    {
        if ($city->user_id != Auth::id()) {
            return redirect()->route('cities.index')->with('error', 'You do not have permission to edit this city.');
        }
        
        $states = State::where('user_id', Auth::id())
                       ->where('status', 'visible')
                       ->get();

        return view('backend.cities.edit', compact('city', 'states'));
    }

    public function update(Request $request, City $city)
    {
        $request->validate([
            'name' => 'required|unique:cities,name,' . $city->id,
            'state_id' => 'required|exists:states,id',
        ]);

        if ($city->user_id != Auth::id()) {
            return redirect()->route('cities.index')->with('error', 'You do not have permission to update this city.');
        }

        $city->update($request->all());

        return redirect()->route('cities.index')->with('success', 'City updated successfully.');
    }

    public function destroy(City $city)
    {
        if ($city->user_id != Auth::id()) {
            return redirect()->route('cities.index')->with('error', 'You do not have permission to delete this city.');
        }

        $city->delete();

        return redirect()->route('cities.index')->with('success', 'City deleted successfully.');
    }
}