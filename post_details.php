<?php include("includes/header.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" /> -->
  <script src="js/jquery-3.3.1.js"></script>
  <script src="js/underscore.js"></script>
   <script src="js/scripts.js"></script>
  <title>Kelele Safi</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">KELELE SAFI</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a href="logout.php" class="btn btn-primary">Logout</a>

          <!-- <a class="nav-link" href="#">Logout</a> -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="row">
    <div class="col-md-3 col-sm-12 cols">
      <div class="container">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>

          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
          <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-12 cols">
      <div class="card text-center">
        <div class="card-header">
          Featured

        </div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
          <!-- ========================================== -->
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-md-offset-3 post">
                <h2>Post title</h2>
                <p>KPLC Tockens not loading</p>
              </div>

              <!-- comments section -->
              <div class="col-md-12 col-md-offset-3 comments-section">
                <!-- comment form -->
                <form class="clearfix" action="functions.php" method="post" id="comment_form">
                  <h4>Post a comment:</h4>
                  <textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                  <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
                </form>

                <!-- Display total number of comments on this post  -->
                <h2><span id="comments_count">0</span> Comment(s)</h2>
                <hr>
                <!-- comments wrapper -->
                <div id="comments-wrapper">
                  <div class="comment clearfix">
                    <img src="profile.png" alt="" class="profile_pic">
                    <div class="comment-details">
                      <span class="comment-name">Melvine</span>
                      <span class="comment-date">Apr 24, 2018</span>
                      <p>This is the first reply to this post on this website.</p>
                      <a class="reply-btn" href="#">reply</a>
                    </div>
                    <div>
                      <!-- reply -->
                      <div class="comment reply clearfix">
                        <img src="profile.png" alt="" class="profile_pic">
                        <div class="comment-details">
                          <span class="comment-name">Awa</span>
                          <span class="comment-date">Apr 24, 2018</span>
                          <p>Hey, why are you the first to comment on this post?</p>
                          <a class="reply-btn" href="#">reply</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- // comments wrapper -->
              </div>
              <!-- // comments section -->
            </div>
          </div>

          <!-- ========================================== -->

        </div>
        <div class="card-footer text-muted">
          2 days ago
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 cols">

    </div>
  </div>
  <div class="footer">
    Blah Blah Blah
  </div>

  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script> -->
  <!-- Javascripts -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- Bootstrap Javascript -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

</body>

</html>