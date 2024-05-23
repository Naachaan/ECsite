<?php session_start(); ?>
<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<link rel="stylesheet" href="./css/mypage-info.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .info-container {
    display: flex;
    gap: 20px;
    margin-top: 20px;
  }

  .container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 400px;
    width: 100%;
    text-align: center;
  }

  h2, h3, p {
    margin: 10px 0;
  }

  button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }

  button:hover {
    background-color: #45a049;
  }

  a {
    color: #007BFF;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
</style>
<body>
  <?php
    echo '<div class="info-container">';
    
    // 会員情報
    echo '<div class="container">';
    echo '<h2 class="heading-002">会員情報</h2>';
    echo '<h3 class="heading-041">基本情報</h3>';

    $kana = $kanji = $email = $password = $birthday = $gender = $post_code
      = $prefectures = $address1 = $address2 = $manshon = '';

    $pdo = new PDO($connect, USER, PASS);

    if(isset($_SESSION['user'])){
      $kana = $_SESSION['user']['kana'];
      $kanji = $_SESSION['user']['kanji'];
      $email = $_SESSION['user']['email'];
      $birthday = $_SESSION['user']['birthday'];
      $post_code = $_SESSION['user']['post_code'];
      $prefectures = $_SESSION['user']['prefectures'];
      $address1 = $_SESSION['user']['address1'];
      $address2 = $_SESSION['user']['address2'];
      $manshon = $_SESSION['user']['manshon'];

      echo '<p><strong>カナ:</strong> ', $kana, '</p>';
      echo '<p><strong>漢字:</strong> ', $kanji, '</p>'; 
      echo '<p><strong>メール:</strong> ', $email, '</p>';
      echo '<p><strong>生年月日:</strong> ', $birthday, '</p>';
      echo '<p><strong>郵便番号:</strong> ', $post_code, '</p>';
      echo '<p><strong>都道府県:</strong> ', $prefectures, '</p>';
      echo '<p><strong>住所1:</strong> ', $address1, '</p>';
      echo '<p><strong>住所2:</strong> ', $address2, '</p>';
      echo '<p><strong>マンション:</strong> ', $manshon, '</p>';
      
      // Add a form to handle changes
      echo '<form action="mypage-change.php" method="post">';
      echo '<button class="button-002">変更</button>';
      echo '</form>';
    } else {
      echo '<p>ログイン情報が見つかりません。<br>もう一度ログインしてください</p>';
      echo '<a href="login.php">ログイン</a>';
    }
    echo '</div>'; // 会員情報のブロック終了

    // クレジットカード情報
    echo '<div class="container">';
    echo '<h2 class="heading-002">クレジットカード情報</h2>';
    // ここにクレジットカード情報の表示を追加

    echo '<form action="credit.php" method="post">';
    echo '<button class="button-002">登録</button>';
    echo '</form>';
    echo '</div>'; // クレジットカード情報のブロック終了
    echo '</div>'; // info-container 終了
  ?>
</body>
<?php require 'footer.php'; ?>
