<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use Illuminate\Http\Request;

class StoreSentence extends Controller
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
            'fname' => 'required|min:7|max:120',
            'did' => 'required',
        ]);

        // check if already exist and returns true or false
        $checker = Sentence::where('sentence_text', $request->Input(['fname']))->exists();

        if($checker)
        {
            session()->put('error', 'Data Already Exist');
            return redirect()->back();
        }
        else
        {
            // store user input
            $department = new Sentence();
            $department->table_id = '5';
            $department->sentence_text = $request->Input(['fname']);
            $department->sentence_row_column = $request->Input(['did']);
            $saved = $department->save();

            // check if value is saved
            if($saved)
            {
                session()->put('success', 'Data Successfully Created!');
                return redirect()->route('sentence.create');
            }
            //the else part
            session()->put('error', 'There was an error creating this data!');
            return redirect()->route('sentence.create');
        }
    }
}
