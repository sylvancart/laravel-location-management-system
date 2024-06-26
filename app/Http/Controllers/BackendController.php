<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\State;
use App\Models\City;
use App\Models\Pincode;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function index()
    {
        $totalStates = State::where('user_id', auth()->id())->count();
        $totalCities = City::where('user_id', auth()->id())->count();
        $totalPincodes = Pincode::where('user_id', auth()->id())->count();

        return view('backend.dashboard', compact('totalStates', 'totalCities', 'totalPincodes'));
    }

    public function changePassword()
    {
        return view('backend.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'same:new_password'
        ]);

        $user = auth()->user();

        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->route('change-password')->with('error', 'Old Password Does not match!');
        }

        if (Hash::check($request->new_password, $user->password)) {
            return redirect()->route('change-password')->with('error', 'New Password should be different from the Old Password!');
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('change-password')->with('success', 'Password Changed Successfully.');
    }
}