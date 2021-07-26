<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class ListTables extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $tables = Table::orderBy('id', 'desc')->paginate(10);//returns db value in descending order with pagination
        return view('table.list_tables', compact('tables'));
    }
}
