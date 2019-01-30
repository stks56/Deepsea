<?php

if(!empty($_COOKIE['username'])){
  if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['input2'])) {
    if(mb_strlen($_POST['input2']) > 0 && mb_strlen($_POST['input2']) <= 8){
      setcookie("username", $_POST['input2'], time()+60*60*24*3);
      header('location: index.php');
    }
  }
} else {
  setcookie("username", "unknown user", time()+60*60*24*3);
}
?>
