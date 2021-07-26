<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use App\Table;
use Illuminate\Http\Request;

class EditSentence extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $did)
    {
        // check if already exist and returns true or false
        $checker = Sentence::where('id', $id)->exists();

        if($checker)
        {
            //$departments = Department::all();// get all departments
            // get database values start with a specific value in descending order
//            $departments = Table::orderByRaw("FIELD(id, $did) DESC")
//                ->get();

            $department = Table::findOrFail($did);// get this employee details
            $employee = Sentence::findOrFail($id);// get this employee details

            //returns the page for this route
            session()->put('success', 'Data Successfully Retrieved!');
            return view('sentence.edit_sentence', compact('employee'), compact('department'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }
    }
}
