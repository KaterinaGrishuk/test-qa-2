<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Class RegisterController
 * @package App\Http\Controllers
 */
class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerAction(Request $request)
    {
        $password = Hash::make($request->get('password'));

        try {
            User::create([
                'firstName' => $request->get('firstName'),
                'lastName' => $request->get('lastName'),
                'phone' => $request->get('phone'),
                'DateOfBirth' => new Carbon('01-01-1900'),
                'email' => $request->get('email'),
                'password' => $password,
                'confirmPassword' => $password,
            ]);
        } catch (\Exception $e) {
           return redirect()->route('registerIndex')->with(['message' => $e->getMessage()]);
        }

        return redirect()->route('registerIndex');
    }
}
