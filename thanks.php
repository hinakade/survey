<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php 

  try{

    //ステップ1.db接続 



    //必要な情報
    $dsn = 'mysql:dbname=phpkiso;host;host=localhost';
    // データベースの種類'データベースの名前をしている'localhost自分自身のサーバに指定。（どちらもひとつのサーバに入っている）
    $user = 'root';
    // $user ゆーざ情報  xampは勝手に作ってある。
    $password = '';
    //初期値(デフォルト)
    // ここまで準備


    //DB接続オブジェクトを作成
    $dbh = new PDO($dsn,$user,$password);
    //new PDO は関数呼び出し。関数名(引数) 引数を渡している。（代入）
    //接続したDBオブジェクトを作成（オブジェクト指向）で作ったものをURF-8に設定

    $dbh->query('SET NAMES utf8'); 

    //
    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $goiken = $_POST['goiken'];
    $nickname = htmlspecialchars($nickname);
    $email = htmlspecialchars($email);
    $goiken = htmlspecialchars($goiken);
    //
    echo $nickname.'様<br>';
    echo 
    'ご意見ありがとうございました<br>';
    echo '頂いたご意見『';
    echo $goiken;
    echo '』<br>';
    echo $email;
    echo 'にメールを送りましたのでご確認ください。';



    // $mail_sub='アンケート受け付けました。';
    // $mail_body=$nickname."様へ/nアンケートご協力ありがとうございました。";
    // $mail_body=html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
    // $mail_head='From: natsuki@hoge.com';
    // mb_language('Japanese');
    // mb_internal_encoding("UTF-8");
    // mb_send_mail($email,$mail_sub,$mail_body,$mail_head);



     //ステップ2  データベースエンジンにSQL文で命令を出す。

    $sql = 'INSERT INTO `survey`(`nickname`,`email`,`goiken`) VALUE("'.$nickname.'","'.$email.'","'.$goiken.'")';
    // var_dump($sql);
    $stmt = $dbh->prepare($sql);
    //insert文を実行
    $stmt->execute();

    // ステップ3  データベースから切断
    $dbh = null; 

  }catch(Exception $e){
    echo 'ご記入ありがとうございました!';
  }
   ?> 
   <form action='desplay.php' method='desplay.php'>
   <input type='submit' value='アンケート一覧表示'>
    </form>
</body>
</html>
