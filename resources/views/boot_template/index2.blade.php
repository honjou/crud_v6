@extends('layouts.master_bootstrap_v2') {{-- テンプレート読み込み --}}
@section('title', 'Laravel学習用プロトタイプA(SASSカスタマイズ)') {{-- サイトタイトル定義 --}}
@section('content')
    <!-- Page Content -->
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="font-weight-light mt-4">Bootstrap Startup kit</h1>
                    <p class="lead">
                        このページでは「Bootstrap Snippets」の「Flexbox Sticky Footer」と「Bootstrap4 Navbar with Logo Image」を使って構成しています。<br><br>
                        Laravelの学習の際にデモページとしてお使いください。
                    </p>
                    <div class="card mb-5">
                        <div class="card-body">
                           <h4 class="card-title">カスタマイズしたSASS</h4>
                           <code style="text-align: left;">

                               /*———————————————<br>
                               Typography<br>
                               ———————————————*/<br>
                               $font-family-sans-serif: 'Nunito', sans-serif;<br>
                               $font-size-base: 0.9rem;<br>
                               $line-height-base: 1.6;<br><br>

                               /*———————————————<br>
                               Colors<br>
                               ———————————————*/<br>
                               $blue: #3490dc;<br>
                               $indigo: #6574cd;<br>
                               $purple: #9561e2;<br>
                               $pink: #f66d9b;<br>
                               $red: #e3342f;<br>
                               $orange: #f6993f;<br>
                               $yellow: #ffed4a;<br>
                               $green: #38c172;<br>
                               $teal: #4dc0b5;<br>
                               $cyan: #6cb2eb;<br><br>

                               // Gray for use across Bootstrap.<br>
                               $gray-base:              #000 !default;<br>
                               $gray-darker:            lighten($gray-base, 13.5%) !default; // #222<br>
                               $gray-dark:              lighten($gray-base, 20%) !default;   // #333<br>
                               $gray:                   lighten($gray-base, 33.5%) !default; // #555<br>
                               $gray-light:             lighten($gray-base, 46.7%) !default; // #777<br>
                               $gray-lighter:           lighten($gray-base, 93.5%) !default; // #eee<br><br>

                               $primary: #f25f70;<br><br>

                               /*———————————————</br>
                               Global<br>
                               ———————————————*/<br>
                               html,<br>
                               body {<br>
                               height: 100%;<br>
                               }<br><br>

                               #page-content {<br>
                               flex: 1 0 auto;<br>
                               }<br><br>

                               #sticky-footer {<br>
                               flex-shrink: none;<br>
                               }<br><br>

                               $body-bg:               #f8fafc !default;<br>
                               $text-color:            $gray-dark !default;
                           </code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Page Content -->
@endsection
