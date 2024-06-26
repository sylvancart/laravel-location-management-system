<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Otp;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $existingUser = User::where('phone', $request->phone)->first();

        if ($existingUser && $existingUser->phone_verified_at) {
            return back()->withErrors(['phone' => 'The phone number is already taken.']);
        }

        // Generating OTP
        $otp = rand(100000, 999999);

        Otp::updateOrCreate(
            ['phone' => $request->phone],
            ['otp' => $otp]
        );

        if ($existingUser) {
            $existingUser->update([
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);
            $user = $existingUser;
        } else {
            $user = User::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
            ]);
        }

        event(new Registered($user));

        $request->session()->put('otp', $otp);
        $request->session()->put('phone', $request->phone);

        return redirect()->route('verify-otp.show');
    }
    
}
