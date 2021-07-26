<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class UpdateTable extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validates fields in form
        $request->validate([
            'name' => 'required|min:7|max:120',
            'rows' => 'required|integer|between:1,4',
            'columns' => 'required|integer|between:1,4'
        ]);

        // check if already exist and returns true or false
        $checker = Table::where('table_name', $request->Input(['name']))->exists();
        $checker1 = Table::select('id')->where('table_name', $request->Input(['name']))->first();

        //return strcmp($checker1,$id);

        // check if data already exist and if the id for that data is same as the id to be updated
        if($checker AND strcmp($checker1->id, $id) !== 0)
        {
            session()->put('error', 'Could not Update because Name Already Exist');
            return redirect()->route('tables.list');
        }
        else
        {
            $department = Table::find($id);
            $department->table_name = $request->Input(['name']);
            $department->table_rows = $request->Input(['rows']);
            $department->table_columns = $request->Input(['columns']);
            $department->save();

            session()->put('success', 'Data Successfully Updated!');
            return redirect()->route('tables.list');
        }
    }
}
