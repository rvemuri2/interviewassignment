<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function create() {
        return view('questions');
    }
    public function store(Request $request) {
        dd($request->all());
    }
}
