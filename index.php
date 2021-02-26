<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>じゃんけんゲーム</title>
</head>
<body>
  <form method="POST">
    <select name="elements">
      <option value="0">グー</option>
      <option value="1">チョキ</option>
      <option value="2">パー</option>
    </select><br>
    <input type="submit" name="submit" value="じゃんけん！">
  </form>
  <?php 
    if(isset($_POST["submit"])) {
      battle($_POST["elements"]);
    }
    function battle($value) {
      $items = ["グー", "チョキ", "パー"];
      $win = 'あなたの勝利です！';
      $lose = 'あなたの敗北です。。。';
      $pc = array_rand($items);
      $user = (int)$value;
      echo "相手: " . $items[$pc] . "<br>";
      switch ($user) {
        case($key === $use):
          $judgment = 'あいこ';
          break;
        case 0:
          $judgment = ($pc === 2) ? $lose : $win;
          break;
        case 1:
          $judgment = ($pc === 0) ? $lose : $win;
          break;
        case 2:
        $judgment = ($pc === 1) ? $lose : $win;
        break;
      }
      echo $judgment;
    }
  ?>
</body>
</html>