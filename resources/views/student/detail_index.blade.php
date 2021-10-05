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

                        <!--お名前-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">お名前</label>
                            <div class="col-sm-10">{{ $student->name }}</div>
                        </div>
                        <!--/お名前-->

                        <!--メールアドレス-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">メールアドレス</label>
                            <div class="col-sm-10">{{ $student->email }}</div>
                        </div>
                        <!--/メールアドレス-->

                        <!--電話番号-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">電話番号</label>
                            <div class="col-sm-10">{{ $student->tel }}</div>
                        </div>
                        <!--/電話番号-->

                        <!--メッセージ-->
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">メッセージ</label>
                            <div class="col-sm-10">{!! nl2br(e( $student->message )) !!}</div>
                        </div>
                        <!--/備考欄-->

                        <!--ボタンブロック-->
                        <div class="form-group row mt-5">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-secondary btn-block" onclick="window.history.back();">戻る</button>
                            </div>
                        </div>
                        <!--/ボタンブロック-->

                    </div><!-- /container -->
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content -->
@endsection
