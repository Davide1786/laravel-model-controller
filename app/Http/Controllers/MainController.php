<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Movie;

class MainController extends BaseController
{

    public function movies() {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
}

