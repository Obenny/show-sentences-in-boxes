<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use App\Sentence;
use Illuminate\Http\Request;

class StoreSentencesInTableBoxes extends Controller
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
            'id',
        ]);

        // check if already exist and returns true or false
        $checker = Sentence::where('sentence_text', $request->Input(['fname']))->exists();
        //$checker1 = Sentence::where('sentence_row_column', $request->Input(['did']))->exists();

        // select col where col A = a and col B = b
        $checker1 = Sentence::where([['sentence_row_column','=',$request->Input(['did'])],
            ['table_id','=', $request->Input(['id'])]])->exists();

        if($checker)
        {
            session()->put('error', 'Text Already Exist');
            return redirect()->back();
        }
        else if($checker1)
        {
            session()->put('error', 'Row Column Already Exist for this Table');
            return redirect()->back();
        }
        else
        {
//            // store user input
            $department = new Sentence();
//            $department->table_id = '5';
            $id = $department->table_id = $request->Input(['id']);
            $department->sentence_text = $request->Input(['fname']);
            $department->sentence_row_column = $request->Input(['did']);
            $saved = $department->save();

            // check if value is saved
            if($saved)
            {
                session()->put('success', 'Data Successfully Created!');
//                return redirect()->route('sentence.create');
                return redirect('/table/'.$id.'/addsentences');
            }
            //the else part
            session()->put('error', 'There was an error creating this data!');
//            return redirect()->route('sentence.create');
            return redirect('/table/'.$id.'/addsentences');
        }
    }
}
