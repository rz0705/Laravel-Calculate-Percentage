<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PercentageController extends Controller
{
    public function calculatePercentage(Request $request)
    {
        if ($request->isMethod('post')) {
            // Form has been submitted; calculate the percentage.
            $subject1 = $request->input('subject1');
            $subject2 = $request->input('subject2');
            $subject3 = $request->input('subject3');
            $subject4 = $request->input('subject4');
            $subject5 = $request->input('subject5');

            $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
            $percentage = ($totalMarks / 500) * 100;
        } else {
            // Form has not been submitted; initialize variables.
            $percentage = null;
        }

        return view('percentage_form', ['percentage' => $percentage]);
    }
}

