
<!DOCTYPE html>
  <html>
    <head>
      <html lang='ja'>
      <meta charset="UTF-8">
      <title>アンケート表示一覧</title>
    </head>

    <?php

    $dsn ='mysql:dbname=phpkiso;host=localhost';
    $user ='root';
    $password ='';
    $dbh = new PDO ($dsn,$user,$password);
    $dbh->query('SET NAMES utf8'); 

    $sql ='SELECT `code`, `nickname`, `goiken`, `email` FROM `survey` WHERE 1'; 

    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    while (1) {
      $rec = $stmt->fetch(PDO::FETCH_ASSOC);
      if($rec ==false)
      {
      break;
    }
    print '<br />';
    print $rec['code'];
    print $rec['nickname'];
    print $rec['email'];
    print $rec['goiken'];

    }
    $dbh = null;
?>

  <body>

   <p>hoge</p>
  </body>

  </html>
