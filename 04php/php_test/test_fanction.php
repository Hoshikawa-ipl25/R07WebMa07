<!-- PHPの関数について確認用ファイル -->

<!-- ユーザ定義の関数 -->
<?php
function say_wordpress()
{
    echo "<p>WordPressこんにちは！</p>";
}
// 関数の名前を呼び出して、その中身を実行
say_wordpress();

// 引数、返り値つきの関数
function add($n1, $n2)
{
    $answer = $n1 + $n2;
    return $answer;
}
echo "<p>" . add(10, 5) . "</p>"; //結果は「15」


// 引数に初期設定の値を入れておける
// function formatYenPrice($value)
// {
//     return $value . "円<br>";
// }

// $price = 800; // ここをコメントアウトすると、エラーになる↓
// echo formatYenPrice($price);

function formatYenPrice($value = "500")
{
    return $value . "円<br>";
}

$price = 800; // ここをコメントアウトして無いことにすると、関数は自分で持ってる初期値で対応する
echo formatYenPrice($price);


// ビルトイン関数いろいろ
// PHPには、あらかじめ用意してある関数・機能がたくさんある

// 文字列を大文字に変更するstrtoupper() 
echo strtoupper('hyde') . "<br>"; // HYDE

//時間の設定、取得
date_default_timezone_set('Japan'); //タイムゾーンを設定する方法
echo '<p>', date('Y/m/d H:i:s'), '</p>';
echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';


//引数無しで、０以上、乱数最大値以下の乱数を返す
echo rand() . "<br>";

//最大値は環境で異なる。getrandmax関数で取得できる
echo getrandmax() . "<br>"; //先生のパソコンは、2147483647でした

//ランダムで出る数字の範囲を指定できる
echo rand(1, 6) . "<br>";
?>
<hr>
<?php

// 文字数を数える関数strlen() これもしかしてstring lengthの略ってコト…！？
$name = 'Vaundy';
echo strlen($name) . "<br>"; // 6

$artists_name = ['Vaundy', '藤井風'];
echo "$artists_name[0] は" . mb_strlen($artists_name[0]) . "文字です<br>"; // 6文字
echo "$artists_name[1] は" . mb_strlen($artists_name[1]) . "文字です<br>"; // 9文字

// 文字を入れ替える関数
// 第一引数の文字をみつけたら、第二引数の文字に入れ替える。作業対象の文字列は第三引数。
echo str_replace('音', '歌', '上白石萌音'); //画面上に表示されるのは萌歌
