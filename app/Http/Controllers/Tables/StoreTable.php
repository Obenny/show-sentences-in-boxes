<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class StoreTable extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validates fields in form
        $this->validate($request,[
            'name' => 'required|min:7|max:120',
            'rows' => 'required|integer|between:1,4',
            'columns' => 'required|integer|between:1,4'
        ]);

        // check if already exist and returns true or false
        $checker = Table::where('table_name', $request->Input(['name']))->exists();

        if($checker)
        {
            session()->put('error', 'Table Name Already Exist');
            return redirect()->back();
        }
        else
        {
            // store user input
            $department = new Table();
            $department->table_name = $request->Input(['name']);
            $department->table_rows = $request->Input(['rows']);
            $department->table_columns = $request->Input(['columns']);
            $saved = $department->save();

            // check if value is saved
            if($saved)
            {
                session()->put('success', 'Data Successfully Created!');
                return redirect()->route('table.create');
            }
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('table.create');
        }
    }
}
