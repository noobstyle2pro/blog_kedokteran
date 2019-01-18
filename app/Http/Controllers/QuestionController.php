<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Requests\QuestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(Question::latest(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $question = new Question;

        $question->body = $request->body;

        $question->save();

        return response($question, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
        return $question;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        $question->body = $request->body;

        $question->save();

        return response($question, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        $question->delete();

        return response(204);
    }
}
