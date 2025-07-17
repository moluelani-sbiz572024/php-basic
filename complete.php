<?php
// セッションを開始
session_start();

// セッションに保存された名前を取得する
$name = isset($_SESSION['name']) ? $_SESSION['name'] : '名前なし';
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PHP基礎編</title>
</head>

<body>
  <h2><?php echo $name; ?>様、お問い合わせを承りました。</h2>
  <p>ありがとうございました。今後の参考にさせていただきます。</p>
  <button id="back-btn" onclick="location.href='form.php';">戻る</button>

  <?php
  // セッション変数を初期化
  $_SESSION = [];
  
  // セッションを終了
  session_destroy();
  ?>
</body>
</html>