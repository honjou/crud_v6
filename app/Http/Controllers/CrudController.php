<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * 一覧表示
     */
    public function getIndex()
    {
        $query = \App\Student::query();
        // 全件取得 +ページネーション
        $students = $query->orderBy('id','desc')->paginate(5);
        return view('student.list')->with('students',$students);
    }

    /**
     * 新規登録（入力）
     */
    public function new_index()
    {
        return view('student.new_index');
    }

    /**
     * 新規登録（確認）
     */
    public function new_confirm(\App\Http\Requests\ValiCrudRequest $req)
    {
        $data = $req->all();
        return view('student.new_confirm')->with($data);
    }
}
