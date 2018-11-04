<?php
/**
 * Created by PhpStorm.
 * User: EkaterinaGrishuk
 * Date: 11/2/2018
 * Time: 1:49 PM
 */

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Validator;

/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController
{
    public function index()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function loginAction(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('loginRedirect');
        }

        $user = User::where('email', $request->get('email'))->first();

        if (!$user) {
            return redirect()->route('loginIndex')->with('message', 'Юзер не существует. Проверьте Email и Password');
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->route('loginIndex')->with('message', 'Юзер не существует. Проверьте Email и Password');
        }

        return redirect()->route('registerRedirect');
    }
}
