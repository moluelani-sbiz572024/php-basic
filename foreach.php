<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
  <!-- PHPの埋め込み -->
  <?php
  $fruits = [
    'バナナ', 'りんご', 'オレンジ', 'ブドウ', 'なし',
  ];

  foreach ($fruits as $item) {
    echo "果物：{$item}<br>";
  }

  echo '<br>';

  $fruits_price = [
    'バナナ' => 700,
    'りんご' => 750,
    'オレンジ' => 1200,
    'ブドウ' => 900,
    'なし' => 720,
  ];

  foreach($fruits_price as $name => $price) {
    echo "果物 {$name} の値段は {$price} 円です。<br>";
  }
  ?>
  <!--  -->
  <p>出身地を選択して下さい</p>
  <form>
    <select>
    <?php
    $birth_place = [
      '北海道地方', '東北地方' ,
      '関東地方', '中部地方',
      '近畿地方', '中国・四国地方', '九州地方',
    ];

    foreach ($birth_place as $local) {
      echo "<option>$local</option>";
    }
    ?>
    </select>
  </form>
</body>

</html>
