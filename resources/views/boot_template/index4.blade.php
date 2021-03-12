@extends('layouts.master_bootstrap_v2') {{-- テンプレート読み込み --}}
@section('title', '都道府県のプルダウンメニューの表示') {{-- サイトタイトル定義 --}}
@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <div class="container">
            <div class="row justify-content-left">
                <div class="col-md-12">
                    <h1 class="font-weight-light mt-4">都道府県のプルダウンメニューの表示</h1>
                    <p class="lead">
                        このページでは「Formファサード + モデル」を使ったデモページです。<br>
                    </p>

                    <!-- Page Content -->
                    <div class="container mt-5">

                        {{--{{Form::open(['url' => '/', 'files' => true])}}--}}
                        {{--{{Form::token()}}--}}

                            <!--評価-->
                            <div class="form-group pb-3">
                                {{ Form::label('address1','住所（都道府県）') }}
                                {{ Form::select('address1', App\Pref::selectlist(),old('address1'),['class' => 'form-control','id' => 'address1', 'required' => 'required']) }}
                            </div>
                            <!--/評価-->

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
