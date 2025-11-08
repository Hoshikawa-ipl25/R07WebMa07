<!-- 共通のHTML部分は外部読み込み -->
<?php require 'header.php'; ?>

<?php
$user = 'db1_user'; // 後のプログラムでDBユーザーの情報を使いまわしたいので、変数に入れておく
$pass = 'aaa'; // 同上

// form.htmlからPOSTメソッドで送信されるデータを変数に格納
$recipe_name = $_POST['recipe_name'];
$howto = $_POST['howto'];
// 文字列の数字が入らないよう、数値型に変換する
$category = (int)$_POST['category'];
$difficulty = (int)$_POST['difficulty'];
$budget = (int)$_POST['budget'];

//データべース操作開始
try {
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=db1;charset=utf8', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'INSERT INTO `recipes` (`recipe_name`, `category`, `difficulty`, `budget`, `howto`) VALUES (?, ?, ?, ?, ?)';
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(1, $recipe_name, PDO::PARAM_STR);
    $stmt->bindValue(2, $category, PDO::PARAM_INT);
    $stmt->bindValue(3, $difficulty, PDO::PARAM_INT);
    $stmt->bindValue(4, $budget, PDO::PARAM_INT);
    $stmt->bindValue(5, $howto, PDO::PARAM_STR);
    $stmt->execute();
    $dbh = null;

    echo 'レシピの登録が完了しました。';
} catch (PDOException $e) {
    echo 'エラー発生: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES) . '<br>';
    exit;
}

?>
<a href="index.php" class="totop">トップページに戻る</a>

<!-- 共通のHTML部分は外部読み込み -->
<?php require 'footer.php'; ?>