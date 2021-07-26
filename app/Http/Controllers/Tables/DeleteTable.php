<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class DeleteTable extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // deletes data using id
        $department = Table::find($id);
        $delete = $department->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Data Successfully Deleted!');
            return redirect()->route('tables.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }
    }
}
