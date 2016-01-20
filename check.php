<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
<p><a/>
</head>
<body>
  <?php 
      $nickname = $_POST['nickname'];
      $email = $_POST['email'];
      $goiken = $_POST['goiken'];

      $nickname = htmlspecialchars($nickname);
      $email = htmlspecialchars($email);
      $goiken = htmlspecialchars($goiken);


      if($nickname==''){
        echo 'ニックネームが入力されていません。';
      }else{
        echo 'ようこそ';
        echo $nickname;
        echo '様';
        echo '<br>';
      }
      if($email==''){
        echo 'メールアドレスが入力されていません。';
      }else{
        echo 'メールアドレス';
        echo $email;
        echo '<br>';
      }
      if($goiken==''){
        echo 'ご意見が入力されていません。';
      }else{
        echo 'ご意見';
        echo $goiken;
        echo '<br>';
      }

      if($nickname==''||$email==''||$goiken==''){
        echo '<form>';
        echo '<input type="button" onclick="histori.back()" value="戻る">';
        echo '</form>';
      }else{
        echo '<form method="post" action="thanks.php">';
        echo '<input type="hidden" name="nickname" value="'.$nickname.'">';
        echo '<input type="hidden" name="email" value="'.$email.'">';
        echo '<input type="hidden" name="goiken" value="'.$goiken.'">';
        echo '<input type="button" onclick="histori.back()" value="戻る">';
        echo '<input type="submit" value="OK">';
        echo '</form>';
      }

   ?>

</body>
</html>

