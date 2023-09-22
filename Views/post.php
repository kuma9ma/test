<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Views/css/style.css">
    <title>記事投稿</title>
    <meta name="description" content="記事投稿です">
</head>
<body>
<div class="blog-post">
                <div class="input-area">
                    <form action="post.php" method="post" enctype="multipart/form-data">
                        <textarea name="body" placeholder="いまどうしてる？" maxlength="140"></textarea>
                        <div class="bottom-area">
                            <div >
                                <input type="file" name="image" class="form-control form-control-sm">
                            </div>
                            <button type="submit">投稿する</button>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>