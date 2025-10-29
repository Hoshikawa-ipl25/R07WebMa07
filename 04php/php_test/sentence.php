<!-- PHPの構文、if文について -->

<?php

$flg = "-123";
if ($flg) {
    echo '$flgは Truthy です。<br>'; // 左記内容を表示 $flgをfalseにすると非表示
}

// $num = 8;
// if ($num > 10) {
//     echo '$numは 10より大きいです<br>'; // 左記内容を表示
// }

$num = 7;
if ($num > 5 && $num < 10) { //and かつ
    echo '$num が 5より大きく、10より小さいです。<br>'; // 左記内容を表示
}

$num02 = 10.1;
if ($num02 < 5 || $num02 > 10) { //or または
    echo "$num02 は 5より小さいか、10より大きい数字です。<br>"; // 左記内容を表示
}

$num03 = 5;
if ($num03 > 10) {
    echo '$num03は10より大きいです。<br>';
} else {
    echo '$num03は10以下です。<br>'; // こちらを表示
}

// $name = '田中';
// if ($name == '山田') {
//     echo '$nameは「山田です」';
// } elseif ($name == '佐藤') {
//     echo '$nameは「佐藤です」';
// } elseif ($name == '田中') {
//     echo '$nameは「田中です」'; // これを表示
// } else {
//     echo 'どれにも当てはまりません';
// }
?>


<!-- ↑の別の記述方法（HTMLの中で条件文だけphpで書く、ような書き方） -->

<?php
$name = '鈴木';
if ($name == '山田'):
?> 　　　　　　　　<!-- ここまではPHPの記述 -->
    <p>$nameは「山田です」</p> <!-- この行はHTMLの記述 -->

<?php elseif ($name == '佐藤'): ?> <!-- この行はPHPの記述 -->
    <p>$nameは「佐藤です」</p>　　　　　　　　 <!-- この行はHTMLの記述 -->

<?php elseif ($name == '田中'): ?> <!-- この行はPHPの記述 -->
    <p>$nameは「田中です」</p>　　　　　　　　 <!-- この行はHTMLの記述 -->

<?php else: ?> 　　　　　 <!-- この行はPHPの記述 -->
    <p>どれにも当てはまりません</p> <!-- この行はHTMLの記述 -->

<?php endif; ?>