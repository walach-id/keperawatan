<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'nama_lengkap' => $request->nama_lengkap,
            'umur' => $request->umur,
            'jekel' => $request->jekel,
            'kota' => $request->kota,
            'diagnosa_medis' => $request->diagnosa_medis,
            'password' => Hash::make($request->password),
            'role_id' => 2,
        ]);

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        $role = Auth::user()->role_id;
        switch ($role) {
            case '1':
                return redirect('/evaluasi-user');
                break;
            case '2':
                return redirect('/');
                break;
            default:
                return redirect('/');
                break;
        }
    }
}
