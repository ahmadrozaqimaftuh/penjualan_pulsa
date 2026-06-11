<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $admin = Admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {

            session([
                'admin_id' => $admin->id,
                'nama_admin' => $admin->nama_admin,
                'email' => $admin->email
            ]);

            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau Password salah');
    }
}