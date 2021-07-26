<?php

namespace App\Http\Controllers\Sentences;

use App\Http\Controllers\Controller;
use App\Sentence;
use App\Table;
use Illuminate\Http\Request;

class ListSentences extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // returns the list view
        $employees = Sentence::orderBy('id', 'desc')->paginate(10);//returns db value in descending order with pagination
        return view('sentence.list_sentences', compact('employees'));
    }
}
