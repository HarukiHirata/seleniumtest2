<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ユーザー登録</h1>
    <form method="post" action="/user/register">
        @csrf
        名前<input type="text" name="name" id="name">
        メールアドレス<input type="text" name="email" id="email">
        パスワード<input type="text" name="password" id="password">
        <button type="submit" id="register-btn">登録</button>
    </form>
</body>
</html>