<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/q.css">
    <title>ログイン画面</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row; /* 横方向に配置 */
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 400px;
            margin: 20px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex; /* flexコンテナとして設定 */
            flex-direction: column; /* 列方向に配置 */
            margin-right: 20px; /* ブロック間の隙間を調整 */
        }

        .center-element {
            text-align: center;
        }

        .last-container {
            max-width: 400px;
            margin-top: auto; /* 追加: 上部の余白を自動で調整 */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="heading-027">Log-in</h2>
        <form action="login-output.php" method="post">
            <label>
                <span class="textbox-001-label">メールアドレス</span>
                <input type="text" class="textbox-001" name="email" placeholder="メールアドレス" />
            </label>
            <label>
                <span class="textbox-001-label">パスワード　　</span>
                <input type="password" class="textbox-001" name="password" placeholder="パスワード"/>
            </label>
            <p><button class="button-003">ログイン</button></p>
        </form>
        <p class="center-element"><a href="pass1.php">＊パスワードを忘れた方はこちら</a></p>
    </div>

    <div class="container">
        <h2 class="heading-027">新規登録</h2>
        <form action="join.php" method="post">
            <!-- 新規登録フォームの内容を追加してください -->
            <!-- 例：
                <label>
                    <span class="textbox-001-label">ユーザー名</span>
                    <input type="text" class="textbox-001" name="username" placeholder="ユーザー名" />
                </label>
            -->
            <p><button type="submit" class="button-003">新規登録</button></p>
        </form>
    </div>

    <div class="last-container">
        <button class="button-003">戻る</button>
    </div>
</body>
</html>
