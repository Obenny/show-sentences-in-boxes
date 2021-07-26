<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class ShowSentencesInTableBoxes extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showsentences($id)
    {
        // check if already exist and returns true or false
        $checker = Table::where('id', $id)->exists();

        if($checker)
        {
            $department = Table::findOrFail($id);
//            $rows = Table::where('id',$id)->value('table_rows');
//            $columns = Table::where('id',$id)->value('table_rows');

            //returns the page for this route
            session()->put('success', 'Data Successfully Retrieved!');
            return view('table.view_sentences_in_boxes', compact('department'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }
    }
}
