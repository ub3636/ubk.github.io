<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>

      <!--===============Navigation start=============-->

<body class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Friends</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!--===============Navigation end=============-->

    <!--================carousel start===========---->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/2.jpeg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!--================carousel end===========---->

     <!--================About u start===========---->

    <section class="my-5">
        <dev class="py-5">
            <h2 class="text-center">About</h2>
        </dev>
        <dev class="container-fluid">
            <dev class="row">
                <dev class="col-lg-6 col-md-6 col-12">
                    <img src="images/MYXJ_20200103161302_save.jpg" class="img-fluid aboutimg">
                </dev>
                <dev class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-4 py-4">Ubaid Khan</h2>
                    <p class="py-5">My name is Ubaid Khan,from KP Pakistan</p>
                    <a href="about.php" class="btn btn-success">Check More</a>
                </dev>
            </dev>
        </dev>
    </section>

     <!--================About u end===========---->

     <!--================our tour start===========---->

    <section class="my-5">
        <dev class="py-5">
            <h2 class="text-center">Our Tours</h2>
        </dev>
        <dev class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/IMG_20190606_18145.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Naran</h4>
                            <p class="card-text">Beautiful Nature</p>
                            <a href="naran.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/MYXJ_20180617175309_save.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Galyath</h4>
                            <p class="card-text">Beautiful Nature</p>
                            <a href="galyat.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/IMG_20190607_120538.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Muree</h4>
                            <p class="card-text">Beautiful Nature</p>
                            <a href="muree.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
            </div>

        </dev>
    </section>

    <!--================our tour end===========---->

    <section class="my-5">
        <dev class="py-5">
            <h2 class="text-center">User Info</h2>
        </dev>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="POST">
                 <div class="form-group">
                 <label for="">Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control" >
                 </div>
                 <div class="form-group">
                 <label for="">Email ID</label>
                    <input type="text" name="email" autocomplete="off" class="form-control" >
                 </div>
                 <div class="form-group">
                 <label for="">Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control" >
                 </div>
                 <div class="form-group">
                 <label for="">Comment</label>
                    <textarea class="form-control" name="comment"></textarea>
                 </div>
                 <button type="submit" class="btn btn-success"> Submit </button>
                </form>
            </div>
         </section>

         
     <!--================footer start===========---->

    <footer>
             <p class="p-3 bg-dark text-white text-center"> Design by: Ubaid Khan <br>
             
             Email:  <a href="ubaidkhan9193246@gmail">ubaidkhan9193246@gmail.com</a> </span>
            </p>
    </footer>

        <!--================footer end===========---->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>