<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Table;
use Illuminate\Http\Request;

class AddSentencesInTableBoxes extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addsentences($id)
    {
        // check if already exist and returns true or false
        $checker = Table::where('id', $id)->exists();

        if($checker)
        {
            $department = Table::findOrFail($id);
            //dd($department);

            //returns the page for this route
            // session()->put('success', 'Data Successfully Retrieved!');
            return view('table.add_sentences_in_boxes', compact('department'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }
    }
}
