<?php

namespace App\Http\Controllers;

use App\Models\Pincode;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PincodeController extends Controller
{
    public function index()
    {
        $pincodes = Pincode::where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc')
                        ->get();
        
        $cities = City::where('user_id', Auth::id())->get();
        
        return view('backend.pincodes.index', compact('pincodes', 'cities'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:pincodes',
            'city_id' => 'required|exists:cities,id',
        ]);

        Pincode::create([
            'code' => $request->code,
            'city_id' => $request->city_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('pincodes.index')->with('success', 'Pincode created successfully.');
    }

    public function edit(Pincode $pincode)
    {
        if ($pincode->user_id != Auth::id()) {
            return redirect()->route('pincodes.index')->with('error', 'You do not have permission to edit this pincode.');
        }
        $cities = City::where('user_id', Auth::id())->get();
        return view('backend.pincodes.edit', compact('pincode', 'cities'));
    }

    public function update(Request $request, Pincode $pincode)
    {
        $request->validate([
            'code' => 'required|unique:pincodes,code,' . $pincode->id,
            'city_id' => 'required|exists:cities,id',
        ]);

        if ($pincode->user_id != Auth::id()) {
            return redirect()->route('pincodes.index')->with('error', 'You do not have permission to update this pincode.');
        }

        $pincode->update($request->all());

        return redirect()->route('pincodes.index')->with('success', 'Pincode updated successfully.');
    }

    public function destroy(Pincode $pincode)
    {
        if ($pincode->user_id != Auth::id()) {
            return redirect()->route('pincodes.index')->with('error', 'You do not have permission to delete this pincode.');
        }

        $pincode->delete();

        return redirect()->route('pincodes.index')->with('success', 'Pincode deleted successfully.');
    }
}