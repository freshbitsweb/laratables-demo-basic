<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;

class BasicLaraTableController extends Controller
{
    /**
     * Show Table Header column
     *
     *
     * @return \Illuminate\Http\Response
     **/
    public function index()
    {
        return view('basicLaraTable');
    }

    /**
     * return data of the basic datatables.
     *
     *
     * @return type Json
     **/
    public function basicLaraTableData()
    {
        return Laratables::recordsOf(User::class);
    }
}
