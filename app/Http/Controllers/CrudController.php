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

    /**
     * 新規登録（登録）
     */
    public function new_finish(Request $request)
    {
        // Studentオブジェクト生成
        $student = new \App\Student;

        // 値の登録
        $student->name = $request->name;
        $student->email = $request->email;
        $student->tel = $request->tel;
        $student->message = $request->message;

        // 保存
        $student->save();

        // 一覧にリダイレクト
        return redirect()->to('student/list');
    }
}
