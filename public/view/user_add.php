<?php
// エラーを出力する
ini_set('display_errors', "On");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="../public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="../public/css/clean-blog.min.css" rel="stylesheet">

    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <form method="post" action="./add">
                <h1>会員登録フォーム</h1>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="ユーザー名" required/>
                    <p class="error"><?php echo isset($errors['username']) ? $errors['username'] :''; ?></p>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="メールアドレス" required/>
                    <p class="error"><?php echo isset($errors['email']) ? $errors['email'] :''; ?></p>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="パスワード" required/>
                    <p class="error"><?php echo isset($errors['password']) ? $errors['password'] :''; ?></p>
                </div>
                <p><input class="btn btn-primary" name="submit" type="submit" value="会員登録"></p>
                <a href="../login">ログインはこちら</a>
            </form>
        </div>
    </div>
</div>
<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="../public/vendor/jquery/jquery.min.js"></script>
<script src="../public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../public/js/clean-blog.min.js"></script>
</body>
</html>