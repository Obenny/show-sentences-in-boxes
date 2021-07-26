<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use Illuminate\Http\Request;

class DeleteSentence extends Controller
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
        $department = Sentence::find($id);
        $delete = $department->delete(); //delete the client
        if($delete)
        {
            session()->put('success', 'Data Successfully Deleted!');
            return redirect()->route('sentences.list');
        }
        else
        {
            session()->put('error', 'There was an error deleting this data!');
            return redirect()->back();
        }
    }
}
