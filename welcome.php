<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

echo $_SESSION["user_id"];

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Project</title>
  <link rel="stylesheet" href="sss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet"> 
</head>

<body>

<?php include 'menu.php'; ?>


  <!--SLIDER PART-->
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/aa1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/aa5.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/aa3.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--ABOUT US-->
  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center text-info">About Us</h1>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/bb3.jpg" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12 px-3">
          <h2 class="display-4">I am Rayan</h2>
          <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt qui doloremque voluptas assumenda fugit expedita aut quo nesciunt soluta quis quae quam, tenetur perspiciatis ratione, aperiam, facere a voluptatum quaerat?</p>
          <a href="about.php" class="btn btn-primary">Check More</a>
        </div>
      </div>
    </div>
  </section>

    <!--Our Services-->
    <section class="my-5">
      <div class="py-5">
        <h1 class="text-center text-info">Our Services</h1>
      </div>
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 25rem;">
              <img src="images/cc1.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title text-danger"><b>Wedding Photography</b></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 25rem;">
              <img src="images/cc2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title text-danger"><b>Portrait Photography</b></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div> 
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width: 25rem;">
              <img src="images/cc3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title text-danger"><b>Fashion Photography</b></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>

    </section>

        <!--Gallery-->
        <section class="my-5">
          <div class="py-5">
            <h1 class="text-center text-info">Gallery</h1>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd1.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd2.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd3.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd4.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd5.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd6.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd7.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd8.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd9.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd10.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd11.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd12.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd13.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd14.jpg" alt="" class="img-fluid pb-3">
              </div>
              <div class="col-lg-4 col-md-4 col-md-12">
                <img src="images/dd15.jpg" alt="" class="img-fluid pb-3">
              </div>
            </div>
          </div>
        </section>

        <!--USER INFO-->
        <section class="my-5">
          <div class="py-5">
            <h1 class="text-center text-info">User Info</h1>
          </div>  
          <div class="w-50 m-auto">
            <form action="userinfo.php" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
              </div>
              <div class="form-group">
                <label>Comment</label>
                <textarea id="" cols="30" rows="10" name="comment" class="form-control"></textarea>
              </div>
              <button type="submit" class="btn btn-success btn-lg mb-2">Submit</button>
            </form>
            <br>
  
            <div class="d-flex flex-row-reverse bd-highlight">
              <div class="p-2 bd-highlight"><button type="button" class="btn btn-danger btn-lg text-center px-5 py-3"><a href="logout.php">Logout</a></button></div>
            </div>
            
          </div>  
        </section> 
 
        <footer>
          <p class="bg-dark text-white text-center py-3">@RayanIT Dhaka</p>
        </footer>



  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>

</body>

</html>