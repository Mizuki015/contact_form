<?php
// 目的：画面にお問い合わせの一覧を出す
// 1. 必要な部品を読み込む(function.php)
// 2. 画面に出力するものを取得する(SELECT文)
// 3. 取得したデータを画面に表示

// 1. 必要な部品を読み込む(function.php)
require_once('functions.php');
require_once('dbconect.php');

// 2. 画面に出力するものを取得する(SELECT文)
// SELECT文を準備
$stmt = $dbh->prepare('SELECT * FROM surveys');
// 準備したものを実行
$stmt->execute();

// 3. 取得した一覧を変数に格納
$results = $stmt->fetchALL();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合せ一覧</title>
</head>
<body>
    <h1>一覧</h1>

    <!-- 一覧を表示する -->
    <?php foreach($results as $result) { ?>
      <p>名前：<?php echo $result['username']; ?></p>
      <p>メールアドレス：<?php echo $result['email']; ?></p>
      <p>内容：<?php echo $result['content']; ?></p>
      <hr>
    <?php } ?>

</body>
</html>