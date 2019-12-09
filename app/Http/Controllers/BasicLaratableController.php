<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;

class BasicLaratableController extends Controller
{
    /**
     * Display Home Page.
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        return view('basic_laratable');
    }

    /**
     * return data of the basic datatables.
     *
     * @return Illuminate\Http\JsonResponse
     **/
    public function basicLaratableData()
    {
        return Laratables::recordsOf(User::class);
    }
}
