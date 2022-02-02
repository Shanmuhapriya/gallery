<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
      <nav class="navbar navbar-expand-sm">
          <a class="navbar-brand" href="index.php">Image Gallery</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation"></button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#Home">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#Register">Register</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Visit Our Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
              </ul>
          </div>
      </nav>

      <h4 style="text-align: center;"> Welcome
  <?php
  session_start();
  echo $_SESSION['username']; ?>
  </h4>

  <div class="container">

  <ul class="nav nav-tabs">
    <li><a href="#Annie">Annie Leibovitz</a></li>
    <li><a href="#Ansel">Ansel Adams</a></li>
    <li><a href="#Dorothea">Dorothea Lange</a></li>
    <li><a href="#Steve">Steve McCurry</a></li>
    <li><a href="#Irving">Irving Penn</a></li>
  </ul>
  <br>

<div id="Annie">
    <h3>Annie Leibovitz</h3>
  <img src="http://sfbaytimes.com/wp-content/uploads/2016/03/BT-3.24-fix_Page_19_Image_0001.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Ansel">
    <h3>Ansel Adams</h3>
    <img src="http://thewordofward.co.uk/wp-content/uploads/2013/01/ansel-adams-hd2.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Dorothea">
    <h3>Dorothea Lange</h3>
    <img src="http://iphf.org/wp-content/uploads/2016/08/4152095357_ce89e0e853_b-660x660.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Steve">
    <h3>Steve McCurry</h3>
    <img src="http://wallup.net/wp-content/uploads/2016/06/06/95878-Afghan_Girl-Steve_McCurry-photography-artwork.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Irving">
    <h3>Irving Penn</h3>
    <img src="http://c41.net/wp-content/uploads/2013/08/76-irving-penn.jpg" style="height: 400px; width: 600px;">
</div>

  <ul class="nav nav-pills">
  <li><a href="#Cindy">Cindy Sherman</a></li>
    <li><a href="#Mary">Mary Ellen Mark</a></li>
    <li><a href="#Robert">Robert Frank</a></li>
    <li><a href="#Elliott">Elliott Erwitt</a></li>
    <li><a href="#Mario">Mario Testino</a></li>
  </ul>

<div id="Cindy">
    <h3>Cindy Sherman</h3>
    <img src="https://i.pinimg.com/736x/45/7c/1d/457c1d5de5fa72cd61eb92a47baac048--cindy-sherman-photography-modern-photographers.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Mary">
    <h3>Mary Ellen Mark</h3>
    <img src="http://www.lighting-essentials.com/wp-content/uploads/2015/04/img360-e1375230802424.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Robert">
    <h3>Robert Frank</h3>
    <img src="https://static01.nyt.com/images/2016/02/04/blogs/20160204-lens-frank-slide-0LBM/20160204-lens-frank-slide-0LBM-superJumbo.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Elliott">
    <h3>Wlliot Erwitt</h3>
    <img src="https://springfieldmuseums.org/wp-content/uploads/2019/06/1162-37-1920x1288.jpg" style="height: 400px; width: 600px;">
</div>
<div id="Mario">
    <h3>Mario Testino</h3>
    <img src="https://i.pinimg.com/736x/ca/8f/e4/ca8fe477ba2a883b3e5a4c9487f44e33--top-photographers-vogue-photo.jpg" style="height: 400px; width: 600px;">
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>