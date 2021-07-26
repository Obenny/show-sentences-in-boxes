<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateTable extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returns the create view
        return view('table.create_table');
    }
}
