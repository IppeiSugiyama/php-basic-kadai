<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>kadai_011</title>
</head>

<body>

  <p>
    <?php

      // 連想配列を作成
      $itemData = ['名前:' => '玉ねぎ', '値段:' => 200, '産地:' => '北海道'];
      
      // 連想配列の出力
      foreach ($itemData as $key => $value){
        echo $key. $value. "<br>";
      }
    ?>
  </p>

</body>
</html>

<!-- キー: 名前、値: 玉ねぎ
キー: 値段、値: 200
キー: 産地、値: 北海道 -->