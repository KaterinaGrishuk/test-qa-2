<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class SyberryInfoController
 * @package App\Http\Controllers
 */
class SyberryInfoController extends Controller
{
    /**
     * @return View
     */
    public function whySyberryAction()
    {
        return view('why_syberry');
    }
}
