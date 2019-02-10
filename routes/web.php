<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// http://laravelapp.test にアクセスしたときにルーティングする場合
Route::get('/', function () {
    return view('welcome');
});

// http://laravelapp.test/hello にアクセスしたときにルーティングする場合
// Route::get('hello',function(){
//     // HTMLを出力する
//     return '<html><body><h1>Hello</h1><p>This is sample page.
//             </p></body></html>';
// });

//ヒアドキュメントでhtmlを作成
$html = <<<EOF
<html>
    <head>
        <title>Hello</title>
        <style>
            body {font-size:16pt; color:#999; }
            h1 { font-size:100pt; text-align:right; olor:#eee;
                margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>This is sample page.</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
</html>
EOF;

// html://laravelapp.test/hello でアクセスしたときのルーティングを記載
Route::get('hello', function () use ($html) {
    return $html;    
});

// html://laravelapp.test/hello2/message でアクセスしたときのルーティングを記載
Route::get('hello2/{msg}', function ($msg) {
$html = <<<EOF
<html>
    <head>
        <title>Hello</title>
        <style>
            body {font-size:16pt; color:#999; }
            h1 { font-size:100pt; text-align:right; color:#eee;
                margin:-40px 0px -50px 0px; }
        </style>
    </head>
    <body>
        <h1>Hello</h1>
        <p>{$msg}</p>
        <p>これは、サンプルで作ったページです。</p>
    </body>
</html>
EOF;

    return $html;
});