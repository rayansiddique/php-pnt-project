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


  <!--ABOUT US-->
  <section class="my-5">
    <div class="py-5">
      <h1 class="text-center text-info">About Us</h2>
    </div>
    
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/333.JPG" alt="" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12 px-3">
          <h2 class="display-4">I am Rayan</h2>
          <p class="py-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt qui doloremque voluptas assumenda fugit expedita aut quo nesciunt soluta quis quae quam, tenetur perspiciatis ratione, aperiam, facere a voluptatum quaerat?</p>
          <a href="about.php" class="btn btn-primary">Check More</a>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
  <div class="py-5">
        <h1 class="text-center text-info">My Team</h1>
      </div>
<div class="card-group">
  <div class="card">
    <img src="images/1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <br><br>
      <h3 class="card-title text-danger text-center"><b>Rayan Siddique</b></h3>
      <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-success"><b>Mobile - 0123456789</b></small>
    </div>
  </div>
  <div class="card">
    <img src="images/22.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title text-danger text-center"><b>Fahim Hasan</b></h3>
      <p class="card-text text-justify">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-success"><b>Mobile - 0123456789</b></small>
    </div>
  </div>
  <div class="card">
    <img src="images/33.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h3 class="card-title text-danger text-center"><b>Mamun Hasan</b></h3>
      <p class="card-text text-justify">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-success text-center"><b>Mobile - 0123456789</b></small>
    </div>
  </div>
</div>
</section>

    <footer>
        <p class="bg-dark text-white text-center py-3">@RayanIT Dhaka</p>
    </footer>

</body>
</html>