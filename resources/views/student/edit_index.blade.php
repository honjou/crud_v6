@extends('layouts.master_bootstrap_v2') {{-- テンプレート（CSSカスタマイズ版）読み込み --}}
@section('title', 'Laravel CRUD APP チュートリアル') {{-- サイトタイトル定義 --}}
@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h1 class="font-weight-light mt-4">Laravel CRUD APP チュートリアル</h1>
                    <p class="lead">
                        このページは「Laravel CRUD APP」のデモページです。<br>
                    </p>

                    <!-- Page Content -->
                    <div class="container mt-5">

                        <!--フォーム-->
                        <form action="" method="post" class="needs-validation" novalidate>
                        {{ csrf_field() }}
                        {{ method_field('patch') }}

                        <!--お名前-->
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" value="{{ $student->name }}" class="form-control @if($errors->has('name')) is-invalid @endif" id="inputName" placeholder="山田　太郎" required>
                                @if($errors->has('name'))
                                    <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @else
                                    <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/お名前-->

                        <!--メールアドレス-->
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" value="{{ $student->email }}" class="form-control @if($errors->has('email')) is-invalid @endif" id="inputEmail" placeholder="yamada@laraweb.net" required>
                                @if($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @else
                                    <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/メールアドレス-->

                        <!--電話番号-->
                        <div class="form-group row">
                            <label for="inputTel" class="col-sm-2 col-form-label">電話番号</label>
                            <div class="col-sm-10">
                                <input type="tel" name="tel" value="{{ $student->tel }}" class="form-control @if($errors->has('tel')) is-invalid @endif" id="inputTel" placeholder="080-1111-2222" required>
                                @if($errors->has('tel'))
                                    <div class="invalid-feedback">{{ $errors->first('tel') }}</div>
                                @else
                                    <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
                                @endif
                            </div>
                        </div>
                        <!--/電話番号-->

                        <!--メッセージ-->
                        <div class="form-group pb-3">
                            <label for="Textarea">メッセージ</label>
                            <textarea name="message" class="form-control @if($errors->has('message')) is-invalid @endif" id="Textarea" rows="3" placeholder="その他、質問などありましたら" required>{{ $student->message }}</textarea>
                            @if($errors->has('message'))
                                <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                            @else
                                <div class="invalid-feedback">必須項目です</div><!--HTMLバリデーション-->
                            @endif
                        </div>
                        <!--/備考欄-->

                        <!--ボタンブロック-->
                        <div class="form-group row mt-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary btn-block">確認</button>
                            </div>
                        </div>
                        <!--/ボタンブロック-->

                        </form>
                        <!--/フォーム-->


                    </div><!-- /container -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content -->
@endsection
