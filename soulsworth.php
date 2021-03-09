<?php

?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soulsworth</title>
    <link rel="stylesheet" href="bootstrap5.0/css/bootstrap.min.css">
    <script src="bootstrap5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="dblog.css"	>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .top{
        background-color: #b5b2c2;
        height: 100vh;
        }
    .form-control{
        height: 80px;
        background-color: #b5b2c2;
        border:1px solid #000;
    }
    img{
        height:70vh;
        width: 	100%;
        display: block;
        margin: auto;
    }

    @media screen and (max-width:992px){
        img{
            height: 40vh;
        }
    }
    @media screen and (max-width:420px){
        img{
            height:22vh;
            width: 200px;
            

            
        }
    }
</style>
<body style="background-color: #b5b2c2; font-family: 'Potta One', cursive;">
    <div class="top">
        <!-- <nav class="navbar navbar-expand-lg navbar-light" id="home">
            <a class="navbar-brand" href="soulsworh.php"><img src="Asset 1.svg" alt="" style="width: 200px; height: 40px;"></a>


            
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
                <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            </div>
        </nav> -->

        <nav class="navbar navbar-expand-lg navbar-light  sticky-top" style="background-color: #b5b2c2">
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
        <div class="container">
        <h3 class="text-center mb-3 mt-2">SOULSWORTH</h3>
        <div class="row">
            <div class=" col-sm-12 col-lg-4 ">
                <h1>GET THE WORD OF GOD DAILY</h1>
                <p>	sign up to receiver tips on work,life,and how to live a rapture ready life.</p>
                <form >
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                </form>
            </div>
            <div class="col-3"></div>
            <div class="col-sm-12 col-lg-5">
                <img src="img/pexels1.jpeg" class="">
            </div>
        </div>
    </div>
</div>
<div id="carouselExampleIndicators" class="carousel slide container-fluid" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/pexels2.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/pexels1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="img/anotherpexels.jpeg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
    </div>
    <br><br><br><br><br>
    <div class="container-fluid bg-dark">
        <h1 class="display-1 text-white"></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="display-4">Are you concerned with where the world is heading?</h2>
                <p class="text-muted">Then listen to our radio program on 91.1FM, 2pm every sunday</p>
            </div>
            <div class="col-md-4">
                <h2 class="display-4">Jesus said: "I am the way, the truth, and the life"</h2>
                <p class="text-muted">Read more in our blogs</p>
            </div>
            <div class="col-md-4">
                <h2 class="display-4">Christianity is a Lifestyle</h2>
                <p class="text-muted">You can learn more about how to live your life as a christian by tuning into 97.7FM every Saturdays by 9pm..</p>
            </div>
        </div>
    </div>
    <hr class="container" style="background-color: red;">
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
