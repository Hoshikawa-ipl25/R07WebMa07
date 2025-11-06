<?php
$name = htmlspecialchars($_POST['name']);
$name_arr = mb_str_split($name);
// print_r($name); //配列を出力する方法
// var_dump($name_arr); 変数や配列などの詳細なデータを表示する関数。主にデバッグ用

$num = 0;
// $text16 = bin2hex($name_arr[1]);
// echo $text16;
foreach ($name_arr as $data) {
    $text16 = bin2hex($data); // bin2hex()関数は文字列を16進数値に変換する
    $text10 = hexdec($text16); // hexdec()関数は、16進数を10進数に変換する
    // $num = $num + $text10;
    $num += $text10;
}
//echo $num; //入力した文字を数値に変換していった結果の数値を表示

$sushi_arr = [
    '01_maguro.jpg',
    '02_chuutoro.jpg',
    '03_ootoro.jpg',
    '04_salmon.jpg',
    '05_anago.jpg',
    '06_inari.jpg',
    '07_akagai.jpg',
    '08_buri.jpg',
    '09_engawa.jpg',
    '10_hotate.jpg',
    '11_tamago.jpg',
    '12_iwashi.jpg',
    '13_katsuo.jpg',
    '14_kohada.jpg',
    '15_amaebi.jpg',
    '16_tai.jpg',
    '17_tako.jpg',
    '18_ikura.jpg',
    '19_uni.jpg',
    '20_california_roll.jpg',
];

//$sushi_num = $num % 20; //20で割った余りが出る⇒０～１９の数値を結果得ることができる

$sushi_num = $num % count($sushi_arr); //count()関数は、配列の要素数を取得する関数
//用意した画像の個数＝$sushi_arr の要素の数 で割り算の余り


//echo "<br>" . $sushi_num;
$sushi = $sushi_arr[$sushi_num];
//echo "<br>" . $sushi;



?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>寿司診断結果</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2 class="result_title"><?= $name ?>さん</h2>
    <img src="img/<?= $sushi ?>" alt="" class="result_img">
</body>

</html>