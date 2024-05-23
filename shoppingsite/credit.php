<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クレジットカード情報登録</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
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
    </style>
</head>
<body>

    <form action="credit-output.php" method="post">
        <h2>クレジットカード情報登録</h2>
        
        <label for="card_number">カード番号:</label>
        <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" required>

        <label for="expiry_date">有効期限 (MM/YYYY):</label>
        <input type="text" id="expiry_date" name="expiry_date" placeholder="MM/YYYY" required>

        <label for="cvv">セキュリティコード (CVV):</label>
        <input type="text" id="cvv" name="cvv" placeholder="123" required>

        <label for="cardholder_name">カードホルダーの名前:</label>
        <input type="text" id="cardholder_name" name="cardholder_name" placeholder="John Doe" required>

        <button type="submit">登録</button>
    </form>
<form action="mypage-info.php">
<button type="submit">戻る</button>
</form>
</body>
</html>
