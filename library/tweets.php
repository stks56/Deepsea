<?php

try {
  $db = new PDO(PDO_DSN, DB_USERNAME , DB_PASSWARD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $stmt = $db->query("select * from tweets order by id desc limit 10;");
  $tweets = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $db = null;

} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
}

?>
