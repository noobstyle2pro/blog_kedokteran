<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestionController extends Controller
{
    /**
     * Get All Questions with Answers
     *
     * @response 200 {
     *  "total_score": 4,
     *  "label": "Anda memiliki mata yang sehat"
     * }
     */
    public function index()
    {
        $messages = Question::latest()->get();

        return response($messages, 200);
    }

    public function create()
    {
        $questions = Question::latest()->get();

        return view('questionnaire', compact('questions'));
    }

    public function store(QuestionRequest $request)
    {
        $question = new Question;

        $question->body = $request->body;

        $question->save();

        return response($question, 201);
    }

    public function show(question $question)
    {
        return $question;
    }

    public function edit(question $question)
    {
        //
    }

    public function update(Request $request, question $question)
    {
        $question->body = $request->body;

        $question->save();

        return response($question, 200);
    }

    public function destroy(question $question)
    {
        $question->delete();

        return response(204);
    }
}
