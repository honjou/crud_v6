<p align="center"><img src="https://raw.githubusercontent.com/honjou/docker_practice/images/logo.png"></p>

## Laravel SASSコンパイル練習用

- Laravel6でのSASSのコンパイル練習用スクリプトです。
- Bootstrap4.3のソース（Sass）を設置しています。

## デモ

[デモページ](http://18.176.27.75/bootstrap-tmp-v2/)

## ディレクトリ構成

```
┣ sass-ractice（Laravelプロジェクト）
　　┣ resources
　　┃　　┣ sass
　　┃　　┃　　┣ bootstrap（bootstrapのパーシャルファイル）
　　┃　　┃　　┣ _variables.scss（sassの変数）
　　┃　　┃　　┣ app.scss（コンパイル元）
　　┃　　┣ views
　　┃　　　　　┣ boot_template
　　┃　　　　　┃　　┣ index2.blade.php（テンプレート子）
　　┃　　　　　┣ layouts
　　┃　　　　　　　 ┣ footer_bootstrap_v2.blade.php（フッター）
　　┃　　　　　　　 ┣ header_bootstrap_v2.blade.php（ヘッダー）
　　┃　　　　　　　 ┣ master_bootstrap_v2.blade.php（テンプレート親）
　　┣ public　
　　　　　┣ assets
　　　　　　　┣ css
　　　　　　　┃　┗ app.css（コンパイル先）
　　　　　　　┣ images
　　　　　　　┃　┗ logo.svg（ロゴ画像）
　　　　　　　┣ js
　　　　　　　　 ┗ app.js（未使用）
```

## 参考URL

詳細については[こちら](https://laraweb.net/environment/7907/)
