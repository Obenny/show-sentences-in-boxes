<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use Illuminate\Http\Request;

class UpdateSentence extends Controller
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
            'fname' => 'required|min:3|max:20',
            'lname',
            'did' => 'required',
            'id',
        ]);

        $employee = Sentence::find($id);
        $employee->table_id = $request->Input(['id']);
        $employee->sentence_text = $request->Input(['fname']);
        $employee->sentence_row_column = $request->Input(['did']);
        $employee->save();

        session()->put('success', 'Data Successfully Updated!');
        return redirect()->route('sentences.list');
    }
}
