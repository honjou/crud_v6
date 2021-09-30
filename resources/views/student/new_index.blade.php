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
                        <form action="" method="post">
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                            <!--お名前-->
                            <div class="form-group row">
                                <label for="inputName" class="col-sm-2 col-form-label">お名前</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" value="{{ old('username') }}" class="form-control" id="inputName" placeholder="お名前">
                                    @if($errors->has('username'))<span class="text-danger">{{ $errors->first('username') }}</span> @endif
                                </div>
                            </div>
                            <!--/お名前-->

                            <!--メールアドレス-->
                            <div class="form-group row">
                                <label for="inputEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="inputEmail" placeholder="メールアドレス">
                                </div>
                            </div>
                            <!--/メールアドレス-->

                            <!--電話番号-->
                            <div class="form-group row">
                                <label for="inputTel" class="col-sm-2 col-form-label">電話番号</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="tel" class="form-control" id="inputTel" placeholder="電話番号">
                                </div>
                            </div>
                            <!--/電話番号-->

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
