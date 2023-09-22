<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/style.css">
    <title>ログイン画面</title>
    <meta name="description" content="ログイン画面です">
</head>

<body>
    <main class="form">
        <form action="sign-in.php" method="post">
            <h1>ログイン</h1>
                <!-- ログイン失敗 -->
            <?php if(isset($view_try_login_result) && $view_try_login_result === false) :?>
            <div class="alert" role="alert">
                ログインに失敗しました。メールアドレス、パスワードをご確認ください。
            </div>
            <?php endif; ?>

            <input type="email" name="email" placeholder="メールアドレス" maxlength="254" required autofocus>
            <input type="password" name="password" placeholder="パスワード" minlength="4" required>
            <button type="submit">ログインする</button>
            <p><a href="sign-up.php">会員登録する</a></p>
            <small>&copy;2023</small>
        </form>
    </main>
</body>

</html>