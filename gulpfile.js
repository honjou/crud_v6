/*
src 参照元を指定
dest 出力さきを指定
watch ファイル監視
series(直列処理)とparallel(並列処理)
*/
const { src, dest, watch, series, parallel } = require('gulp');

// プラグインを呼び出し
const sass = require('gulp-sass');

// プラグインの処理をまとめる
const cssSass = () => {
    return src('./resources/sass/*.scss') //コンパイル元
        .pipe(sass({ outputStyle: 'expanded' }))
        .pipe(dest('./public/css/'))     //コンパイル先
}

// タスクをまとめて実行
exports.default = series(cssSass);
