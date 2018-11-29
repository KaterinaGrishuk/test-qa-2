<?php

namespace App\Http\Controllers;

/**
 * Class FooterController
 * @package App\Http\Controllers
 */
class FooterController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function qualityRedirect()
    {
        return redirect()->route('qualityRedirect');
    }
}

