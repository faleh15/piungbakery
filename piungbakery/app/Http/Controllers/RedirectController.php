<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    //
    public function redirectToShop()
    {
        $project2Url = 'http://127.0.0.1:8001';

        return Redirect::to($project2Url);
    }

}
