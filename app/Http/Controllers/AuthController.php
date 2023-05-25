<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Simpan data pengguna yang sedang login ke sesi
        $request->session()->put('user', $user);
    }

    public function register(){
        // return view('auth.register');
        Auth::logout();
        $isAuthenticated = Auth::check();

    return view('auth.register', compact('isAuthenticated'));
    }

    public function registerPost(Request $request)
    {
        $user = new User();

           $user->nama_lengkap = $request->nama; 
           $user->username = $request->username; 
           $user->nik = $request->nik; 
           $user->telepon = $request->telepon; 
           $user->email = $request->email;
           $user->role = "warga";
           $user->password = Hash::make($request->password); 
        
        $user->save();

        return redirect('login')->with('success', 'Registrasi Berhasil');
    }
    
    // login
    public function login()
{
    if (auth()->check()) {
        $user = auth()->user();

        if ($user->role == 'admin' || $user->role == 'operator') {
            return redirect()->route('dashboard-admin');
        } elseif ($user->role == 'warga') {
            return redirect()->route('dashboard');
        }
    } elseif (auth()->viaRemember()) {
        // Logout user and redirect to login if remember_token is empty
        $user = auth()->user();
        if (!$user->remember_token) {
            auth()->logout();
            return redirect()->route('login');
        }
    }

    return view('auth.login');
}



    public function loginMasuk(Request $request)
{
    $loginField = $request->input('username');
    $password = $request->input('password');
    $remember = $request->has('remember'); // Periksa apakah checkbox "Ingat Saya" dicentang

    $user = User::where('username', $loginField)
        ->orWhere('nik', $loginField)
        ->first();

    if ($user && Hash::check($password, $user->password)) {
        // Authentication successful
        if ($remember) {
            $user->setRememberToken(Str::random(60)); // Set remember_token baru jika "Ingat Saya" dicentang
            $user->save();
        }

        auth()->login($user);

        if ($user->role == 'admin') {
            return redirect()->route('dashboard-admin');
        } elseif ($user->role == 'warga') {
            return redirect()->route('dashboard');
        }
    } else {
        if (!$user) {
            return redirect('login')->withErrors([
                'username' => 'Data tidak ada. Username atau NIK yang dimasukkan tidak ditemukan.',
            ]);
        } else {
            return redirect('login')->withErrors([
                'password' => 'Password salah.',
            ]);
        }
    }
}



    protected function validator(array $data)
{
    return Validator::make($data, [
        'password' => ['required', 'confirmed', 'min:8'], 
    ]);
}

public function logout()
{
    // Clear the remember_token cookie
    Cookie::queue(Cookie::forget('remember_token'));

    // Clear the remember_token field in the users table
    $user = Auth::user();
    if ($user) {
        $user->remember_token = null;
        $user->save();
    }

    // Perform the logout
    Auth::logout();

    return redirect('/login');
}


}
