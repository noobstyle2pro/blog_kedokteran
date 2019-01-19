<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
	/**
     * Calculate Scores
     *
     * @bodyParam scores array required The collection of scores that will be sum. 
     * @response 200 {
	 * 	"total_score": 4,
	 * 	"label": "Anda memiliki mata yang sehat"
	 * }
     */

	public function calculate(Request $request)
	{


		return ;
	}
}
