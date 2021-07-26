<?php

namespace App\Http\Controllers;

use App\Sentence;
use App\Table;
use Illuminate\Http\Request;

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
//        return view('home');

        $table = Table::count();// counts total
        $sentence = Sentence::count();// counts total
        return view('home', compact('table'), compact('sentence'));
    }
}
