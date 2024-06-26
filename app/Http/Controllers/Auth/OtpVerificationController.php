<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Http\Request;

class OtpVerificationController extends Controller
{

    public function show(Request $request)
    {
        $phone = $request->session()->get('phone');
        $otp = $request->session()->get('otp');

        return view('auth.verify-otp', ['phone' => $phone, 'otp' => $otp]);
    }

    public function verify(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'otp' => 'required|string',
        ]);

        $otpRecord = Otp::where('phone', $request->phone)->where('otp', $request->otp)->first();

        if ($otpRecord) {
            $user = User::where('phone', $request->phone)->first();
            if ($user) {
                $user->phone_verified_at = now();
                $user->save();

                auth()->login($user);
                return redirect()->route('dashboard');
            }
        }

        return back()->withErrors(['otp' => 'Invalid OTP.']);
    }

    public function resendOtp(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
        ]);

        $otp = rand(100000, 999999);

        $request->session()->put('otp', $otp);

        Otp::updateOrCreate(
            ['phone' => $request->phone],
            ['otp' => $otp]
        );

        return response()->json(['otp' => $otp]);
    }

}
