<?php
require_once('library/db_config.php');
require_once('library/tweets.php');
require_once('library/send.php');
?>
<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <title>Deepsea</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/stylesheet/styles.css">
  </head>
  <body>
    <!-- オープニングモーダル -->
    <div class="opening" id="opening-modal">
      <div class="opening-container">
        <h1 id="opening-1">ここは海の底、</h1>
        <h1 id="opening-2">あなたの好きなことをつぶやけます・・・</h1>
      </div>
    </div>
    <!-- sendモーダル -->
    <div class="modal" id="send-modal">
      <div class="close-modal fa fa-2x fa-times"></div>
      <div class="modal-container">
        <form action="#" method="POST" name="form1" onsubmit="return check1()">
          <p><textarea name="input1" rows="5" cols="60"></textarea></p>
          <p><input type="submit" value="つぶやく"></p>
        </form>
      </div>
    </div>
    <!-- 名前変更モーダル -->
    <div class="modal" id="name-change-modal">
      <div class="close-modal fa fa-2x fa-times"></div>
      <div class="modal-container">
        <form action="#" method="POST"name="form2" onsubmit="return check2()">
          <p><input type="text" name="input2"></p>
          <p><input type="submit" value="名前を変える"></p>
        </form>
      </div>
    </div>
    <!-- 説明と概要モーダル -->
    <div class="modal" id="about-modal">
      <div class="close-modal fa fa-2x fa-times"></div>
      <div class="modal-container">
        <div class="about-content">
          <h2>説明</h2>
          <p>ツイッター風シングルページアプリケーションです。</p>
          <p>投稿内容50文字以内、名前変更8文字以内まで可能です。</p>
          <p>最新投稿から10件まで表示</p>
          <p>公序良俗に反する投稿はご遠慮ください。</p>
          <h2>概要</h2>
          <p>製作者・stks56</p>
          <p>転職活動用に作った自主制作。</p>
          <p>使用言語 HTML CCS JavaScript JQuery PHP SQL</p>
          <p>オープンソース、ソースコードはGitHubで公開しています。</p>
          <a href="https://github.com/stks56/DeepseaRepository">https://github.com/stks56/DeepseaRepository</a>
        </div>
      </div>
    </div>
    <!-- ヘッダー＆ボディ -->
    <header>
      <div class="header-left">
        <a link="#" class="fas fa-fish"></a>
      </div>
      <div class="header-right">
        <ul>
          <span><?php echo "@" . $_COOKIE['username']; ?></span>
          <li class="send">つぶやく</li>
          <li class="name-change">名前変更</li>
          <li class="about">説明と概要</li>
        </ul>
      </div>
    </header>
    <div class="main-container">
      <?php foreach($tweets as $tweet): ?>
      <div class="tweet">
        <p><?php echo $tweet['content']; ?></p>
        <span><?php echo '@' . $tweet['username'] . "\n" . $tweet['created']; ?></span>
      </div>
      <?php endforeach; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="/script/script.js"></script>
    <script src="/script/jquery.js"></script>
  </body>
</html>
