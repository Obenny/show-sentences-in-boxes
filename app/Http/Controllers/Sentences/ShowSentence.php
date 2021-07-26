<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use Illuminate\Http\Request;

class ShowSentence extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // check if already exist and returns true or false
        $checker = Sentence::where('id', $id)->exists();

        if($checker)
        {
            $employee = Sentence::findOrFail($id);

            //returns the page for this route
            session()->put('success', 'Data Successfully Retrieved!');
            return view('sentence.view_sentence', compact('employee'));
        }
        else
        {
            session()->put('error', 'Data Does Not Exist');
            return redirect()->back();
        }
    }
}
