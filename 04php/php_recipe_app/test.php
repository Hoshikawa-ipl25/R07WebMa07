<!-- <pre>
    <?php
    print_r($_POST);
    ?>
</pre> -->

<?php
echo htmlspecialchars($_POST['recipe_name'], ENT_QUOTES);
echo '<br>';

if ($_POST['category'] == '1') echo '和食';
// categoryキーの変数が値1の場合は、「和食」を出力という処理を設定
if ($_POST['category'] == '2') echo '中華';
if ($_POST['category'] == '3') echo '洋食';

echo '<br>';

if ($_POST['difficulty'] == '1') {
    echo '簡単';
} elseif ($_POST['difficulty'] == '2') {
    echo '普通';
} else {
    echo '難しい';
}
echo '<br>';

if (is_numeric($_POST['budget'])) { //指定した変数($_POST['budget'])が数字なら
    echo number_format($_POST['budget']); // 数字のフォーマットで変数を値を表示する
}
echo '<br>';
//nl2br()関数　テキストエリア内などでの改行コードを<br>で表示しなおしてくれる
echo nl2br(htmlspecialchars($_POST['howto'], ENT_QUOTES));
echo '<br>';
