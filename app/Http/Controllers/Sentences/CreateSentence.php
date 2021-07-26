<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use App\Table;
use Illuminate\Http\Request;

class CreateSentence extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // returns the create view
//        return view('sentence.create_sentence');

        // returns the create view
        $departments = Table::all();
        return view('sentence.create_sentence', compact('departments'));
    }
}
