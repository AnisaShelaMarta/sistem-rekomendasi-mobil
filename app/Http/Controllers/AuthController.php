<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $admin = Admin::where(
            'username',
            $request->username
        )->first();

        if (
            $admin &&
            Hash::check(
                $request->password,
                $admin->password
            )
        ) {
            session([
                'admin_id' => $admin->id,
                'username' => $admin->username
            ]);

            return redirect('/daftarmobil');
        }

        return back()->with(
            'error',
            'Username atau password salah'
        );
    }

    public function logout()
    {
        session()->flush();

        return redirect('/login');
    }
}