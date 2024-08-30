<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class PasswordController extends Controller
{
    // Show the form to request a password reset link
    public function showLinkRequestForm()
    {
        return view('email'); // Ensure you have this view created
    }

    // Handle the request to send a password reset link
    public function sendResetLinkEmail(Request $request)
    {
        $this->validateEmail($request);

        // Send the password reset link
        $response = Password::sendResetLink($request->only('email'));

        if ($response == Password::RESET_LINK_SENT) {
            // Success message
            return Redirect::back()->with('status', 'Password reset link sent successfully!');
        } else {
            // Error message
            return Redirect::back()->withErrors(['email' => __($response)]);
        }
    }

    // Show the form to reset the password
    public function showResetForm($token)
    {
        return view('reset', ['token' => $token]);
    }

    // Handle the password reset submission
    public function reset(Request $request)
{
    $this->validateReset($request);

    $response = Password::reset(
        $this->credentials($request),
        function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
        }
    );

    return $response == Password::PASSWORD_RESET
        ? redirect()->route('home')->with('success', 'Password has been reset successfully!')
        : back()->withErrors(['email' => [__($response)]]);
}

    // Validate the email for password reset request
    protected function validateEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);
    }

    // Validate the password reset request
    protected function validateReset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
    }

    // Get the password reset credentials
    protected function credentials(Request $request)
    {
        return $request->only('email', 'password', 'password_confirmation', 'token');
    }
}
