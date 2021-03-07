<p align="center"><img src="https://raw.githubusercontent.com/honjou/docker_practice/images/logo.png"></p>

## Laravel SASSコンパイル練習用

- Laravel6でのSASSのコンパイル練習用スクリプトです。
- Bootstrap4.3のソース（Sass）を設置しています。

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
　　┃　　　　　　　┣ index.blade.php（表示用）
　　┣ public　
　　　　　┣ css
　　　　　　　┣ app.css（コンパイル先）
```

## 参考URL

詳細については[こちら](https://laraweb.net/environment/7907/)
