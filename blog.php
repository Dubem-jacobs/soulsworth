<?php
    require('connect.php');

    $query = 'SELECT * FROM posts';

    //GET RESULT

    $result = mysqli_query($conn, $query);

    //Fecth data
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Free Result
    mysqli_free_result($result);

    //Close Connection
    mysqli_close($conn); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soulsworth blogs</title>
    <link rel="stylesheet" href="bootstrap5.0/css/bootstrap.min.css">
    <script src="bootstrap5.0/js/bootstrap.min.js"></script>
</head>
<style>
        .form-control{
            height: 80px;
            background-color: #b5b2c2;
            border:1px solid #000;
        }
    </style>

<body style="background-color: #b5b2c2; font-family: 'Potta One', cursive;">
    <div class="top">
        <!-- <nav class="navbar navbar-expand-lg navbar-light" id="home">
          <a class="navbar-brand" href="soulsworth.php"><img src="Asset 1.svg" alt="" style="width: 200px; height: 40px;"></a>


            
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ">
              <li class="nav-item active">
                <a class="nav-link pl-5" href="soulsworth.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog.php">blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">about</a>
              </li>
            </ul>
          </div>
        </nav> -->



        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #b5b2c2">
            <div class="container-fluid navy">
                <a class="navbar-brand text-white" href="soulsworth.php" style="font-size: 50px;">Soulsworth</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link pl-5" href="soulsworth.php">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">about</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <h1>Posts</h1>
        <?php foreach($posts as $post) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <h3><?php echo $post['title']; ?></h3>
                    <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
                    <br><br>
                    <p><?php echo $post['body']; ?></p>
                    <hr>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
<footer class="container">
    <div class="row">
        <div class="col-lg-4 p-5">
            <h3 class="text-bold">WE WILL GUIDE YOU WITH THE SCRIPTURES</h3>
            <p class="text-muted">CONTACT US ON SOCIAL MEDIA</p>
            <div>
                <a href="facebook.com"><i class="fa fa-facebook fa-2x p-2"></i></a>
                <i class="fa fa-twitter fa-2x p-2"></i>
                <a href="https://www.instagram.com/d.dubem/"><i class="fa fa-instagram fa-2x p-2"></i></a>
                <i class="fa fa-linkedin fa-2x p-2"></i>
                <i class="fa fa-whatsapp fa-2x p-2"></i>
            </div>
        </div>
        <div class="col-md-4 p-5">
            <li>
                <a href="#" style="text-decoration: none; color: black;">Network</a>
            </li>
            <br>
            <li>
                <a href="#" style="text-decoration: none; color: black;">About</a>
            </li>
            <br>
            <li>
                <a href="#" style="text-decoration: none; color: black;">Terms</a>
            </li>
            <br>
            <li>
                <a href="#" style="text-decoration: none; color: black;">Privacy</a>
            </li>
        </div>
        <div class="col-md-4 p-5">
            <h1>SIGN UP FOR OUR NEWSLETTERS</h1>
            <p>We will notify you each update</p>
            <form >
                <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">Your email is safe here</small>
                </div>
            </form>
        </div>
    </div>
</footer>
</html>