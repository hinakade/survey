<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎</title>
</head>
<body>
<?php 
try{
    $id = $_POST['id'];

    $dsn = 'mysql:dbname=phpkiso;host;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8'); 

    $sql = 'SELECT * FROM survey WHERE code=?';
    $stmt = $dbh->prepare($sql);
    $data[] = $code;
    $stmt->execute($data);

    while(1){
      $rec = $stmt->fetch(PDO::FETCH_ASSOC);
      if ($rec == false){
        break;
      }
      echo $rec['code'];
      echo '  ';
      echo $rec['nickname'];
      echo $rec['email'];
      echo $rec['goiken'];
    } 

    $dbh = null;

}catch(Exception $e){

  print ただいまサーバが遅れており、通信ができません。しばらくお待ち下さい。;
}

 ?>
 <br>
 <a href="kensaku.html">検索画面に戻る</a>   
</body>
</html>
