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
      $key = array_rand($items);
      $user = (int)$value;
      echo "相手: " . $items[$key] . "<br>";
      if($key === $user) {
        echo "あいこ";
      } else if ($key === 0 && $user === 1) {
        echo $lose;
      } else if($key === 0 && $user === 2) {
        echo $win;
      } else if($key === 1 && $user === 0 ) {
        echo $win;
      } else if ($key === 1 && $user === 2) {
        echo $lose;
      } else if ($key === 2 && $user === 0) {
        echo $lose;
      } else if ($key === 2 && $user === 1) {
        echo $win;
      }
    }
  ?>
</body>
</html>