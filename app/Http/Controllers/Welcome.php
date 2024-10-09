<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Welcome extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        // $user = User::find(1);
        // // User::query()->create([
        // //     'name' => 'Adelino',
        // //     'email' => 'adelino@gmail.com',
        // //     'password' => 'adelino@gmail.com'
        // // ]);

        // // dd($user->email_verified_at); // dump(); die();

        // // Auth::login($user);

        // Auth::logout($user);

        return view('welcome');
    }
}
