<?php
// セッションを開始
session_start();

// POSTリクエストから入力データを取得
$name = $_POST['user_name'];
$email = $_POST['user_email'];
$gender =$_POST['user_gender'];
$category = $_POST['category'];
$message = $_POST['message'];

//エラーメッセージを格納する配列
$errors = [];

// 名前用バリデーション
if (empty($name)) {
  //$errors[] = 'お名前を入力して下さい。';
  array_push($errors, 'お名前を入力して下さい。');
}
// メールアドレス用バリデーション
if (empty($email)) {
  array_push($errors, 'メールアドレスを入力して下さい。');
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  array_push($errors, 'メールアドレスの入力形式が正しくありません。');
}
// お問い合わせ内容用バリデーション
if (empty($message)) {
  array_push($errors, 'お問い合わせ内容を入力して下さい。');
} elseif (mb_strlen($message) > 100) {
  array_push($errors, 'お問い合わせ内容が100文字を超えています。');
}

// 入力項目に問題がなければセッション・クッキーを保存
if (empty($errors)) {
  // セッション変数を保存
  $_SESSION['name'] = $name;
  $_SESSION['email'] = $email;
  $_SESSION['gender'] = $gender;
  $_SESSION['category'] = $category;
  $_SESSION['message'] = $message;

  // クッキーを登録（有効期限は１時間）
  setcookie('name', $name, time() + 3600);
  setcookie('email', $email, time() + 3600);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <h2>入力内容をご確認ください</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr><th>項目</th><th>入力内容</th>
    </tr>
    <tr><th>お名前</th>
        <td><?php echo $name; ?></td>
    </tr>
    <tr><th>メールアドレス</th>
        <td><?php echo $email; ?></td>
    </tr>
    <tr><th>性別</th>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr><th>お問い合わせ種別</th>
        <td><?php echo $category; ?></td>
    </tr>
    <tr><th>お問い合わせ内容</th>
        <td><?php echo $message; ?></td>
    </tr>
  </table>

  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn"  onclick="history.back();">キャンセル</button>
  </p>

  <?php
  // 入力項目にエラーがある場合の処理
  if (!empty($errors)) {
    // 配列内のエラーメッセージを順番に出力する
    foreach ($errors as $error) {
      echo "<font color='red'>{$error}</font><br>";
    }

    // 確定ボタンを無効化するJavaScriptコードをブラウザ側に送信
    echo '<script>document.getElementById("confirm-btn").disabled = true;</script>';
  }
  ?>
</body>
</html>