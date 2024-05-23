<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-success {
        color: #4CAF50;
        border: 1px solid #4CAF50;
        padding: 10px;
        margin-bottom: 20px;
    }

    .login-error {
        color: #D32F2F;
        border: 1px solid #D32F2F;
        padding: 10px;
        margin-bottom: 20px;
    }

    button {
        display: block; /* 変更：ブロック要素に変更 */
        width: 100%; /* 変更：横幅を100%に設定 */
        margin: 10px 0; /* 変更：マージンを設定 */
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }

    button:hover {
        background-color: #555;
        color: #fff;
    }

    button.home-btn {
        background-color: #3498db;
        color: #fff;
    }

    button.mypage-btn {
        background-color: #2ecc71;
        color: #fff;
    }

    .image-container {
        display: flex;
        flex-direction: column; /* 変更：縦に並べるように設定 */
        align-items: center;
    }

    .image-container img {
        margin-bottom: 10px; /* 変更：画像とボタンの間に隙間を設定 */
    }
</style>

<?php require 'header.php'; ?>
<div class="container">
<?php
            echo '<div class="login-success">';
        echo '<p>お客様情報を登録しました。</p>';
        echo '<p>再度ログインをお願いします。</p>';
        echo '<div class="image-container">';
        echo '<a href="login.php"><img src="image/onegai.png" style="height: 300px; width:300px;" alt=""></a>';
        echo '<button class="home-btn" onclick="location.href=\'login.php\'">ログインへ</button>';
        echo '</div>';
        echo '</div>';
?>
<?php require 'footer.php'; ?>