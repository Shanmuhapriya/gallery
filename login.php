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

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://blog.depositphotos.com/wp-content/uploads/2017/05/quotes-on-photography-depositphotos-2.jpg" alt="First slide" style="width: 500px; height: 500px;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://quotefancy.com/media/wallpaper/3840x2160/16822-Dorothea-Lange-Quote-The-camera-is-an-instrument-that-teaches.jpg" alt="Second slide" style="width: 500px; height: 500px;">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.geckoandfly.com/wp-content/uploads/2014/04/photography-quotes11.jpg" alt="Third slide" style="width: 500px; height: 500px;">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div id="Login" align="center">
            <div class="h-tag">
            <h2 style="text-align: center;">Welcome Back!</h2>
            </div>
            <!-- create account div -->
            <form action="validation.php" method="POST" align="center" style="border: 0px; margin: 0px 50px">
            <div class="login">
            <table cellspacing="2" align="center" cellpadding="8" border="0">
            <tr>
            <td align="right">Name:</td>
            <td><input type="text" placeholder="Enter user here" id="t1" class="tb" name="user"/></td>
            </tr>
            <tr>
            <td align="right">Password:</td>
            <td><input type="password" placeholder="Enter Password here" id="t4" class="tb" name="password" /></td>
            </tr>
            <tr>
            <td></td>
            <td>
            <input type="reset" value="Clear Form" onclick="clearFunc()" id="res" class="btn" />
            <button type="submit" class="btn" name="submit">Login</button>
            </tr>
            </table>
            </div>
        </form>
            </div>

     
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>