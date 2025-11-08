<!-- 共通のHTML部分は外部読み込み -->
<?php require 'header.php'; ?>

<?php

if (empty($_GET['id'])) { // 変数$_GETの中の id が「空」かどうかを判定し、空なら以下処理を実行
    echo 'IDを正しく入力してください。';
    exit;
}

$user = 'db1_user'; // 後のプログラムでDBユーザーの情報を使いまわしたいので、変数に入れておく
$pass = 'aaa'; // 同上

try {
    $id = (int)$_GET['id']; // idを数値型に変換して変数 $id に格納

    //var_dump($id); // $idの中身を確認
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=db1;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO実行時のエラーモード（PDO::ATTR_ERRMODE）を Exception（PDO::ERRMODE_EXCEPTION）に設定
    $sql = 'SELECT * FROM recipes WHERE id = ?'; // 特定のレシピデータを取り出すために、SQLを設定。該当するidの全レコードを取り出す。
    $stmt = $dbh->prepare($sql); // $stmtに対してSQLが使えるように準備。$dbhはPDOの機能を利用でき、prepareはその機能のうちの１つ。
    $stmt->bindValue(1, $id, PDO::PARAM_INT); //プレースホルダー１つめに入れる値の設定
    $stmt->execute();  //SQLを実行する
    $result = $stmt->fetch(PDO::FETCH_ASSOC); // 取得したデータを配列にして格納
    //print_r($result); // 取得したデータを出力して確認

    $dbh = null;
} catch (PDOException $e) {
    echo 'エラー発生: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES) . '<br>';
    exit;
}
echo '料理名:' . htmlspecialchars($result['recipe_name'], ENT_QUOTES) . '<br>' . PHP_EOL;
//echo 'カテゴリ:' . $result['category'] . '<br>' . PHP_EOL;
echo 'カテゴリ:';
if ($result['category'] == '1') {
    echo '和食' . PHP_EOL;
} elseif ($result['category'] == '2') {
    echo '中華' . PHP_EOL;
} else {
    echo '洋食' . PHP_EOL;
}
echo '<br>';


echo '予算:' . htmlspecialchars(number_format($result['budget']), ENT_QUOTES) . '<br>' . PHP_EOL;
//echo '難易度:' . $result['difficulty'] . '<br>' . PHP_EOL;
echo '難易度:';
if ($result['difficulty'] == '1') {
    echo '簡単' . PHP_EOL;
} elseif ($result['difficulty'] == '2') {
    echo '普通' . PHP_EOL;
} else {
    echo '難しい' . PHP_EOL;
}
echo '<br>';



echo '作り方:<br>' . nl2br(htmlspecialchars($result['howto']), ENT_QUOTES) . '<br>' . PHP_EOL;

?>
<a href="index.php" class="totop">トップページに戻る</a>

<!-- 共通のHTML部分は外部読み込み -->
<?php require 'footer.php'; ?>