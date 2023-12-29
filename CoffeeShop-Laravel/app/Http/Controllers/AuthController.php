<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login.index'); 
    }
    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Login successful
            return redirect()->route('cart');
        }

        // Login failed
        return redirect()->route('login')->with('error', 'Invalid username or password');
    }
    public function showSignupForm()
    {
        return view('register.index');
    }
    public function processSignup(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'name'     => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'name'     => $request->name,
        ]);

        // Signup successful
        return redirect()->route('login')->with('success', 'Account created successfully. Please login.');
    }
}
