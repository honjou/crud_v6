<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function getIndex()
    {
        $query = \App\Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id','desc')->paginate(5);
        return view('student.list')->with('students',$students);
    }
}
