<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredAdminController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('adminauth.adminsignup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function storeAdmin(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'adminProfile' => ['required', 'file', 'mimes:png,jpg,jpeg'],
            'password' => ['required', 'min:4'],
            'password_confirmation' => ['required', 'same:password']
        ]);

        // Store the profile image

        $profileExtension = $request->file('adminProfile')->extension();

        $content = file_get_contents($request->file('adminProfile'));

        $profileName = Str::random(25);

        $path = "profileavatars/$profileName.$profileExtension";

        Storage::disk('public')->put($path, $content);

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => $path,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($admin));

        Auth::guard('admin')->login($admin);

        return redirect()->route('admin.dashboard');
    }
}
