<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <h2>正規表現色々</h2>
  <div>
      <?php
      // str＝「文字列」を意味するstringの略
      $str = 'Appleが5個あります。Orangeは1個しかありません。';
      // $str = 'Appleが5個あります。PineAppleは1個しかありません。';

      echo '検索対象：' . $str;
      ?>
      <p>
        <?php
        echo '「Orange」が含まれているかどうかを正規表現で検索します。<br>';

        if (preg_match('/Orange/', $str)) {
            echo '>正規表現に一致しました。';
        } else {
            echo '>正規表現に一致しませんでした。';
        }
        ?>
      </p>
  </div>
</body>
</html>
