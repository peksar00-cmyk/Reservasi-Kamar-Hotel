<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\EmailExists;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $firebase = (new Factory)->withServiceAccount(base_path('firebase-auth.json'));
        $auth = $firebase->createAuth();

        try {
            $userProperties = [
                'email' => $request->email,
                'clearTextPassword' => $request->password,
                'displayName' => $request->name,
            ];

            $auth->createUser($userProperties);

            return redirect('/login')->with('success', 'Akun berhasil dibuat! Silakan login.');

        } catch (EmailExists $e) {
            return back()->withErrors(['email' => 'Email ini sudah terdaftar!']);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $apiKey = 'AIzaSyBOIGOEZ02fycXAgFnGUXi4jpLht2LuvIE';
        $url = "https://identitytoolkit.googleapis.com/v1/accounts:signInWithPassword?key={$apiKey}";

        $response = Http::post($url, [
            'email' => $request->email,
            'password' => $request->password,
            'returnSecureToken' => true,
        ]);

        if ($response->successful()) {
            $userData = $response->json();

            session(['user_token' => $userData['idToken']]);
            session(['user_email' => $request->email]);
            session(['user_name' => $userData['displayName'] ?? '']);

            return redirect('/main')->with('success', 'Berhasil login!');
        }

        return back()->withErrors(['email' => 'Email atau password salah!']);
    }
}
