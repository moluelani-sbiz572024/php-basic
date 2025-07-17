<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <!-- PHPの埋め込み -->
    <?php
    class StaticClass {
      public static $name;
    }

    StaticClass::$name = 'hoge';

    echo StaticClass::$name;

    // 定数に配列を入れる
    const SEVEN_REGIONS = [
      '北海道地方',
      '東北地方',
      '関東地方',
      '中部地方',
      '近畿地方',
      '中国・四国地方',
      '九州地方',
  ];

    // 定数（配列）の中身を出力する
    print_r(SEVEN_REGIONS);

    SEVEN_REGIONS[2] = 'hoge';

    print_r(SEVEN_REGIONS);
    ?>
</body>

</html>
