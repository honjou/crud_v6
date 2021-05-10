@extends('layouts.master_bootstrap') {{-- テンプレート読み込み --}}
@section('title', 'Laravel学習用プロトタイプA') {{-- サイトタイトル定義 --}}
@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <h1 class="font-weight-light mt-4 text-white">Bootstrap Startup kit</h1>
                    <p class="lead text-white-50">
                        このページでは「Bootstrap Snippets」の「Flexbox Sticky Footer」と「Bootstrap4 Navbar with Logo Image」を使って構成しています。<br><br>
                        Laravelの学習の際にデモページとしてお使いください。
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content -->
@endsection
