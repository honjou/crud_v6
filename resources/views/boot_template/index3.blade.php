@extends('layouts.master_bootstrap_v2') {{-- テンプレート読み込み --}}
@section('title', 'Formファサード まとめ（Laravel Collective）') {{-- サイトタイトル定義 --}}
@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h1 class="font-weight-light mt-4">Formファサード まとめ（Laravel Collective）</h1>
                    <p class="lead">
                        このページでは「Laravel Collective」パッケージのFormファサードを使ったデモページです。<br>
                        実際の出力結果をご確認ください。
                    </p>

                    <!-- Page Content -->
                    <div class="container mt-5">

                        {{--{{Form::open(['url' => '/', 'files' => true])}}--}}
                        {{--{{Form::token()}}--}}

                            <!--氏名-->
                            <div class="form-group row">
                                <div class="col-md-2 mb-3">
                                    {{Form::label('inputName','氏名')}}
                                </div>
                                <div class="col-md-10">
                                    {{Form::text('inputName', null, ['class' => 'form-control','id' => 'inputName','placeholder' => '氏名'])}}
                                </div>
                            </div>
                            <!--/氏名-->

                            <!--Eメール-->
                            <div class="form-group row">
                                <div class="col-md-2 mb-3">
                                    {{Form::label('inputEmail','Eメール')}}
                                </div>
                                <div class="col-md-10">
                                    {{Form::email('inputEmail', null, ['class' => 'form-control','id' => 'inputEmail','placeholder' => 'Eメール'])}}
                                </div>
                            </div>
                            <!--/Eメール-->

                            <!--パスワード-->
                            <div class="form-group row">
                                <div class="col-md-2 mb-3">
                                    {{Form::label('inputPassword','パスワード')}}
                                </div>
                                <div class="col-md-10 mb-3">
                                    {{Form::password('inputPassword', ['class' => 'form-control','id' => 'inputPassword','placeholder' => 'パスワード'])}}
                                    <small id="passwordHelpBlock" class="form-text text-muted">パスワードは、文字と数字を含めて8～20文字で、空白、特殊文字、絵文字を含むことはできません。</small>
                                </div>
                            </div>
                            <!--/パスワード-->

                            <!--性別-->
                            <div class="form-group row">
                                    <legend class="col-form-label col-md-2 mb-3">性別</legend>
                                    <div class="col-md-10">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            {{Form::radio('raidoGender', '女性', true, ['class'=>'custom-control-input','id'=>'radioGender1'])}}
                                            {{Form::label('radioGender1','女性',['class'=>'custom-control-label'])}}
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            {{Form::radio('raidoGender', '男性', false, ['class'=>'custom-control-input','id'=>'radioGender2'])}}
                                            {{Form::label('radioGender2','男性',['class'=>'custom-control-label'])}}
                                        </div>
                                    </div>
                            </div>
                            <!--/性別-->

                            <!--スキル-->
                            <div class="form-group row">
                                <div class="col-md-2 mb-3">スキル</div>
                                <div class="col-md-10">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        {{Form::checkbox('checkSkill', 'PHP／Laravel', false, ['class'=>'custom-control-input','id'=>'checkSkill1'])}}
                                        {{Form::label('checkSkill1','PHP／Laravel',['class'=>'custom-control-label'])}}
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        {{Form::checkbox('checkSkill', 'Ruby on Rails', false, ['class'=>'custom-control-input','id'=>'checkSkill2'])}}
                                        {{Form::label('checkSkill2','Ruby on Rails',['class'=>'custom-control-label'])}}
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        {{Form::checkbox('checkSkill', 'Vue.js', false, ['class'=>'custom-control-input','id'=>'checkSkill3'])}}
                                        {{Form::label('checkSkill3','Vue.js',['class'=>'custom-control-label'])}}
                                    </div>
                                </div>
                            </div>
                            <!--/スキル-->

                            <!--評価-->
                            <div class="form-group pb-3">
                                {{Form::label('selectEvalute','評価')}}
                                {{Form::select('selectEvaluate', ['good' => 'よかった', 'ordinarily' => '普通', 'bad' => '悪い'], 'ordinarily', ['class' => 'form-control','id' => 'selectEvalute'])}}
                            </div>
                            <!--/評価-->

                            <!--ファイル選択-->
                            <div class="custom-file mb-5">
                                {{Form::file('image', ['class'=>'custom-file-input','id'=>'fileImage'])}}
                                {{Form::label('fileImage','ファイル選択...',['class'=>'custom-file-label'])}}
                            </div>
                            <!--/ファイル選択-->

                            <!--備考欄-->
                            <div class="form-group mb-3">
                                {{Form::label('textareaRemarks','備考欄')}}
                                {{Form::textarea('textareaRemarks', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => 'その他、質問などありましたら', 'rows' => '3'])}}
                            </div>
                            <!--/備考欄-->

                            <!--ボタンブロック-->
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    {{Form::submit('送信', ['class'=>'btn btn-primary btn-block'])}}
                                </div>
                            </div>
                            <!--/ボタンブロック-->

                        {{--{{Form::close()}}--}}

                    </div><!-- /container -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content -->
@endsection
