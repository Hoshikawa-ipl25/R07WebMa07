<!-- 共通のHTML部分は外部読み込み -->
<?php require 'header.php'; ?>

<h1>レシピの一覧</h1>
<a href="form.html">レシピの新規登録</a>

<?php

$user = 'db1_user'; // 後のプログラムでDBユーザーの情報を使いまわしたいので、変数に入れておく
$pass = 'aaa'; // 同上


try { // 通常動作。動作が監視され、問題なければそのまま動作。エラーが起きるとcatchに回される

    $dbh = new PDO('mysql:host=127.0.0.1;dbname=db1;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // PDO実行時のエラーモード（PDO::ATTR_ERRMODE）を Exception（PDO::ERRMODE_EXCEPTION）に設定
    $sql = 'SELECT * FROM recipes'; // テーブル recipes からすべてのデータを取得するSQL文を$sqlに代入
    $stmt = $dbh->query($sql); // データベースに接続して、$sqlの内容で問い合わせ（query）る、結果を$stmtに代入
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); // 実行結果をすべて取り出して（fetchAll）、カラム名をつけた配列にして返す（FETCH_ASSOCがその設定をする定数）

    //print_r($result); //DBから取り出した配列を表示
    $dbh = null; //DBへのアクセスを一回切る

} catch (PDOException $e) { // 例外の種類を指定。変数には例外の情報が入る。
    echo 'エラー発生: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES) . '<br>'; // 動作に例外が発生した場合の処理
    exit;
}
echo '<table>' . PHP_EOL;
echo '<tr>' . PHP_EOL;
echo '<th>料理名</th><th>予算</th><th>難易度</th>' . PHP_EOL;
echo '</tr>' . PHP_EOL;

foreach ($result as $row) {
    echo '<tr>' . PHP_EOL;
    echo '<td>' . htmlspecialchars($row['recipe_name'], ENT_QUOTES) . '</td>' . PHP_EOL;
    //number_format 数表示にカンマをいれてくれる
    echo '<td>' . htmlspecialchars(number_format($row['budget']), ENT_QUOTES) . '</td>' . PHP_EOL;

    //echo '<td>' . $row['difficulty'] . '</td>' . PHP_EOL;
    if ($row['difficulty'] == '1') {
        echo '<td>' . '簡単' . '</td>' . PHP_EOL;
    } elseif ($row['difficulty'] == '2') {
        echo '<td>' . '普通' . '</td>' . PHP_EOL;
    } else {
        echo '<td>' . '難しい' . '</td>' . PHP_EOL;
    }

    // 詳細ページへのリンク
    echo "<td>" . PHP_EOL;
    echo '<a href="detail.php?id=' . htmlspecialchars($row['id'], ENT_QUOTES) . '">詳細</a>' . PHP_EOL;
    echo "</td>" . PHP_EOL;
    //


    echo '</tr>' . PHP_EOL;
}

echo '</table>' . PHP_EOL;
?>

<!-- 共通のHTML部分は外部読み込み -->
<?php require 'footer.php'; ?>