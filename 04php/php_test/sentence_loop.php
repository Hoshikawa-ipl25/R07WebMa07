<!-- PHPのループ文（繰り返し文）について：for文、while文、foreach文について -->

<?php
// 例. １〜５の数字を順に出力する
// for ($i = 1; $i <= 5; $i++) {
//     echo $i . '<br>';
// }
//例. 文字列を１つずつ順に出力する
$names = ['レブロン', 'ドンチッチ', '八村', 'リーヴス', 'エイトン'];
echo  '配列の要素の数は' . count($names) . '個<br>';
for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}

$num = 0; // 初期化式
while ($num < 3) {
    echo $num . '<br>';
    $num++; // 更新処理。$num = $num + 1; と同じ
}

$machines = [
    ['name' => 'ファミリーコンピューター', 'brand' => '任天堂', 'year' => 1983],
    ['name' => 'メガドライブ', 'brand' => 'セガ', 'year' => 1988],
    ['name' => 'ネオジオ', 'brand' => 'SNK', 'year' => 1990],
    ['name' => 'PlayStation', 'brand' => 'SONY', 'year' => 1994],
];

$i = 0; //初期化式
while ($i < count($machines)) { //繰り返し条件
    echo $machines[$i]['name'] .  " - {$machines[$i]['brand']} " . "({$machines[$i]['year']})<br>";

    $i++; //更新処理
}

$food = ['りんご', 'みかん', 'なし', 'ぶどう'];
foreach ($food as $value) { //$value ←ここは自分で好きな変数名をつけられるが、思いつかなければ $value とか、配列名にしたものの単数形とかで
    echo $value . '<br>';
}

$fruits = array(
    'apple' => 'りんご',  // appleのことを「キー」、りんごのことを「値（バリュー）」
    'orange' => 'みかん',
    'paer' => 'なし',
    'grape' => 'ぶどう',
);

foreach ($fruits as $key => $value) { // $key, $valueは自分で好きな名前つける
    echo $key . 'は' . $value . 'です<br>';
}
