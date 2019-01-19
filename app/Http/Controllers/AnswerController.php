<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Get All Answers
     *
     * @response 200 {
     *  "total_score": 4,
     *  "label": "Anda memiliki mata yang sehat"
     * }
     */
    public function index()
    {
        $message = Answer::latest()->get();

        return response($message, 200);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Answer $answer)
    {
        //
    }

    public function edit(Answer $answer)
    {
        return view('answer', $answer);
    }

    public function update(Request $request, Answer $answer)
    {
        $answer->body = $request->body;
        $answer->score = $request->score;
        $answer->question_id = $request->question_id;

        $answer->save();

        return $answer;
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();
    }
}
