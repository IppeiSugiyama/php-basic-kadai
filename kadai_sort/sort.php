<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        //配列のソートを行う関数
        function sort_2way(array $array, bool $order): array {
          // ソート方向を判定
          if ($order) {
              echo "昇順にソートします。<br>";
              sort($array); // 昇順ソート
          } else {
              echo "降順にソートします。<br>";
              rsort($array); // 降順ソート
          }
          
          return $array;
          // echo "<br>";
      }

      // ソートする配列を宣言
      $nums = [15, 4, 18, 23, 10];

      // 昇順でソート
      $sortedAsc = sort_2way($nums, true);
      foreach ($sortedAsc as $num) {
          echo $num . "<br>";
      }

      echo "<br>";

      // 降順でソート
      $sortedDesc = sort_2way($nums, false);
      foreach ($sortedDesc as $num) {
          echo $num . "<br>";
      }

        
        
        
        ?>
    </p>
</body>

</html>