<?php

namespace  App\Http\Controllers\Auth\Teacher;

use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class RegisterController extends Controller
{
    public function create(): View
    {
        return view('teacher.auth.register');
    }

    public function checkUser(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Teacher::class],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $teacher = Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('teacher')->login($teacher);

        return redirect(RouteServiceProvider::TEACHER_DASHBOARD);
    }
}