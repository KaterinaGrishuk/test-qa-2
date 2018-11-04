<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
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

    public function resetAction(Request $request)
    {
        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            return redirect('changePassword');
        }

        return redirect()->route('resetIndex')->with('message', 'На ваш почтовый ящик отправлено сообщение с новым gfhjktv. Please check your mailbox.');
    }
}
