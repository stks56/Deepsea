<?php

require_once('library/setcookie.php');

$send = '';
$user = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if(!empty($_POST['input1'])){
    $send = $_POST['input1'];
    $user = $_COOKIE['username'];
    if(mb_strlen($send) > 0 && mb_strlen($send) <= 50) {
      try {
        $db = new PDO(PDO_DSN, DB_USERNAME , DB_PASSWARD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $db->prepare("insert into tweets (content, username) values (?, ?)");
        $stmt->bindValue(1, $send, PDO::PARAM_STR);
        $stmt->bindValue(2, $user, PDO::PARAM_STR);
        $stmt->execute();

        $db = null;
        header('location: index.php');
        exit();
      } catch(PDOException $e) {
        echo $e->getMessage();
        exit;
      }
    } else {
      header('location: index.php');
    }
  }
}

?>
