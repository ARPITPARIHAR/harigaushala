<?php

namespace App\Http\Controllers;

use App\Services\OtpService;
use Illuminate\Http\Request;

class OtpController extends Controller
{
    public function showOtpForm()
    {
        return view('user.otp');
    }

    public function generateOtp(Request $request, OtpService $otpService)
    {
        // Generate OTP
        $otp = $otpService->generateOtp();

        // Send OTP via SMS using Twilio
        $this->sendOtpViaSms($request->input('phone'), $otp);

        return view('otp', ['otp' => $otp]);
    }

    private function sendOtpViaSms($phoneNumber, $otp)
    {
        $sid = env('TWILIO_SID'); // Your Twilio SID
        $token = env('TWILIO_AUTH_TOKEN'); // Your Twilio Auth Token
        $from = env('TWILIO_PHONE_NUMBER'); // Your Twilio phone number

        // Instantiate Twilio Client
        $client = new \Twilio\Rest\Client($sid, $token);

        // Format the phone number (you may need to adjust this based on your requirements)
        $phoneNumber = '+1' . $phoneNumber; // Assuming US numbers

        // Send SMS with 'From' parameter
        $client->messages->create(
            $phoneNumber,
            [
                'from' => $from, // Twilio phone number
                'body' => 'Your OTP is: ' . $otp,
            ]
        );
    }
}


    
