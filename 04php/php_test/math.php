<!-- PHPで扱える数式 -->

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎 数値の計算式</title>
</head>

<body>
    <?php

    $add = 3 + 8; // 加算
    echo $add . '<br>'; // 11を出力

    $subtract = 6 - 2; // 減算
    echo $subtract . '<br>'; // 4を出力

    $multiply = 4 * 7; // 乗算
    echo $multiply . '<br>'; // 28を出力

    $divide = 12 / 4; // 除算
    echo $divide . '<br>'; //3を出力

    $surplus = 5 % 3; // 剰余
    echo $surplus . '<br>'; // 2を出力

    ?>

    <?php

    $a = 3;
    $b = 8;
    $c = $a + $b;

    echo $c . '<br>'; // 11を出力

    echo (1 + 2) * (3 + 4) . '<br>'; //四則演算　（）の中を先に計算する、などの法則は普段の計算と同じ

    ?>

    <?php
    $num = 5;
    //$num = $num + 1; // 計算結果は６
    //$num += 1;
    $num++;
    echo $num . '<br>';

    $pi = 3.14;
    echo ceil($pi) . '<br>'; // 4
    echo round($pi, 1) . '<br>'; // 3.1 第二引数の数値まで、小数点以下を表示して四捨五入
    echo round($pi, 2) . '<br>'; // 3.14 を表示

    ?>

</body>

</html>