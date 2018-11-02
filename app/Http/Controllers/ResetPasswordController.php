<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

/**
 * Class ResetPasswordController
 * @package App\Http\Controllers
 */
class ResetPasswordController extends Controller
{
    /**
     * @return View
     */
    public function index()
    {
        return view('auth.passwords.reset');
    }
}
