<?php
/**
 * Created by PhpStorm.
 * User: EkaterinaGrishuk
 * Date: 11/2/2018
 * Time: 1:49 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return redirect()->route('registerIndex');
    }
}
