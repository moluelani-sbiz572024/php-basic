<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    $fruits_price = [
      'バナナ' => 700,
      'りんご' => 750,
      'オレンジ' => 1200,
      'ブドウ' => 900,
      'なし' => 720,
    ];

    foreach($fruits_price as $name => $price) {
      switch ($price) {
        case $price <= 700:
          echo "{$name}({$price}円) は、よく買って食べます。<br>";
          break;
        case $price >= 700 && $price < 900:
          echo "{$name}({$price}円) は、少し高価なので、たまに食べる程度です。<br>";
          break;
        case $price > 900:
          echo "{$name}({$price}円) は、高価なので、頂き物以外は買って食べません。<br>";
          break;
        default:
          echo "{$name}({$price}円) は、高すぎて手が出せません。<br>";
      }
    }
    ?>
</body>

</html>
