<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/style.css">
    <title>会員登録画面</title>
    <meta name="description" content="会員登録画面です">
</head>
<body>
    <main class="form">
        <form action="sign-up.php" method="post">
            <h1>アカウント作成</h1>
            <input type="text" name="nickname" placeholder="ニックネーム" maxlength="50" required autofocus>
            <input type="text" name="name" placeholder="ユーザー名" maxlength="50" required >
            <input type="email" name="email" placeholder="メールアドレス" maxlength="254" required >
            <input type="password" name="password" placeholder="パスワード" minlength="4" required >
            <button type="submit">登録する</button>
            <p><a href="sign-in.php">ログインする</a></p>
            <small>&copy;2023</small>
        </form>
    </main>
   
</body>
</html>