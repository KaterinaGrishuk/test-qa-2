<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Validator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class ProfileController
 * @package App\Http\Controllers
 */
class ProfileController extends Controller
{
    /**
     * @param Request $request
     * @param null $id
     * @param Router $router
     * @return View
     */
    public function profileIndex(Request $request, $id = null, Router $router)
    {
        $allowRoutes = [
            'profileIndex',
            'profileAction',
        ];

        $previousRoute = $router->getRoutes()->match($request->create(URL::previous()))->getName();

        $isProfileRedirect = Session::get('isProfileRedirect');

        $user = User::find($id);

        if ((!in_array($previousRoute, $allowRoutes) && !$isProfileRedirect)  || !$user) {
            throw new NotFoundHttpException();
        }

        Session::remove('isProfileRedirect');

        return view('user.profile', ['user' => $user]);
    }

    public function profileAction(Request $request, $id = null)
    {
        /**
         * @var User $user
         */
        $user = User::find($id);

        $data = $request->all();

        $user->firstName = $data['firstName'];
        $user->lastName = $data['lastName'];
        $user->phone = $data['phone'];
        $user->age = $data['age'];
        $user->gender = 3;

        $user->save();

        return redirect()->route('profileIndex', ['id' => $user->id]);
    }
}
