<?php

namespace App\Http\Controllers;

use App\Models\StudentExam;
use Illuminate\Http\Request;

class StudentExamControler extends Controller
{
    public function getFromStudent($id)
    {
        return response()->json(StudentExam::where('student_id', $id));
    }

    public function store(Request $request, $id)
    {
        $se = StudentExam::create([
            'student_id' => $id,
            'exam_id' => $request->exam_id,
            'grade' => $request->grade
        ]);
        return response()->json(StudentExam::find($se->id));
    }
}
