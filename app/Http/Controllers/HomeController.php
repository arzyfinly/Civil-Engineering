<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Auth;
=======
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('mahasiswa.index');
=======
        return view('home');
>>>>>>> 076bf8cae2c9edb498a16eb68947049348053cb3
    }
}
