<?php

namespace App\Http\Controllers;

/**
 * Class FooterController
 * @package App\Http\Controllers
 */
class FooterController extends Controller
{
    public function qualityRedirect()
    {
        return redirect()->route('resetIndex');
    }
}

