<?php
//スーパーグローバル変数
//（phpがもともと用意している変数）

$username = $_POST['username'];
$email = $_POST['email'];
$content = $_POST['content'];

// ユーザー名が空かチェック
if ($username == '') {
    $usernameResult = 'なんで入力しないんですか？';
} else {
    $usernameResult = $username;
}

if ($email == '') {
    $emailResult = 'なんで入力しないんですか？';
} else {
    $emailResult = $email;
}

if ($content == '') {
    $contentResult = 'なんで入力しないんですか？';
} else {
    $contentResult = $content;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>入力内容確認</title>
</head>
<body>
    <h1>入力内容確認</h1>

    <p>名前：<?php echo $usernameResult; ?></p>
    <p>メールアドレス：<?php echo $emailResult; ?></p>
    <p>お問合わせ内容：<?php echo $contentResult; ?></p>

    <form action="">
        <button>戻る</button>
        <input type="submit" value="OK">
    </form>

</body>
</html>