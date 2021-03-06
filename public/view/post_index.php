<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Start Bootstrap Theme</title>
    <!-- Bootstrap core CSS -->
    <link href="./public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="./public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="./public/css/clean-blog.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./">Home</a>
                </li>
                <li class="nav-item">
                    <div class="btn-group">
                         <a style="color: white; font-size: 13px; margin-right: 20px;" href="./post/add">登録</a>
                    </div>

                </li>
                <li class="nav-item">
                    <div class="btn-group">
                        <span style="color: white; font-size: 13px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            カテゴリ管理
                        </span>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./category/add">登録</a>
                            <a class="dropdown-item" href="#">一覧</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Header -->
<header class="masthead" style="background-image: url('./public/img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>TODOlist</h1>
          
                </div>
            </div>
        </div>
    </div>
</header>
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./public/css/test.css" rel="stylesheet">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./public/css/blog.css" rel="stylesheet">
  </head>
  <body>
    
<div class="container-fluid">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="link-secondary" href="#"></a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark">TODOアプリ</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      
      
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href=http://localhost:8888/php_tutorial>HOME</a>
      <a class="p-2 link-secondary" href="#">タスクの追加
      </a>
      <a class="p-2 link-secondary" href="">カテゴリ管理</a>
      <a class="p-2 link-secondary" href="#">ログアウト</a>
    </nav>
  
  </div>
  

<button id="btn1">タスクの追加</button>


<div class="containera" id="dragbox">
    
<div id="dropbox1" class="box" ondragover="DragOver(event)" ondrop="onDrop(event)">
<div id="box1" class="child ao" draggable="true" ondragstart="DragStart(event)">青</div> 
<div id="box2" class="child ak" draggable="true" ondragstart="DragStart(event)">赤</div>
<div id="box3" class="child md" draggable="true" ondragstart="DragStart(event)">緑</div>
</div>
<div id="dropbox2" class="box" ondragover="DragOver(event)" ondrop="onDrop(event)"></div>
<div id="dropbox3" class="box" ondragover="DragOver(event)" ondrop="onDrop(event)"></div>
<div id="dropbox4" class="box" ondragover="DragOver(event)" ondrop="onDrop(event)"></div>

</div>

</div>


  </body>
</html>


<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach ($posts as $post) { ?>

                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <?php echo $post['title'] ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php echo nl2br($post['content']) ?>
                        </h3>
                        <i class="far fa-bookmark"></i>
                        <?php echo nl2br($post['category_name']) ?><br>
                        <i class="fas fa-tags"></i>
                    </a>
                    <p class="post-meta">Posted <?php echo $post['date'] ?>　
                </div>


            <?php } ?>

            <hr>
            <!-- Pager -->
            <div class="clearfix">
                <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
            </div>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript -->
<script src="./public/vendor/jquery/jquery.min.js"></script>
<script src="./public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for this template -->
<script src="../js/clean-blog.min.js"></script>
<script type="text/javascript" src="./public/js/test.js"></script> 
</body>
</html>