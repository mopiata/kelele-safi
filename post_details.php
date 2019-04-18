<?php include("includes/header.php")?>
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
        <!-- <a href="logout.php" class="btn btn-primary">Logout</a> -->

          <a class="nav-link" href="logout.php">Logout</a>
          
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
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
  <div class="row">
    <div class="col-md-3 col-sm-12 cols">
      <div class="container">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/user.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Logged in as <?php dispay_message() ?> </h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
              content.
            </p>

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
                <!-- <form class="clearfix" action="functions.php" method="post" id="comment_form">
                  <h4>Post a comment:</h4>
                  <textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3"></textarea>
                  <button class="btn btn-primary btn-sm pull-right" id="submit_comment">Submit comment</button>
                </form> -->

                <!-- Display total number of comments on this post  -->
                <h2><span id="comments_count">0</span> Comment(s)</h2>
                <hr>
                <!-- comments wrapper -->
<div class="panel panel-default">
<div class="panel-heading">Submit Your Comments</div>
  <div class="panel-body">
  	<form method="post" action="post_comments.php">
  	  <div class="form-group">
	    <label for="exampleInputEmail1">Name</label>
	    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Name">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Subject</label>
	    <textarea name="subject" class="form-control" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
  <p><?php getComments() ?></p>
  </div>
</div>
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
				<div class="card-footer text-muted">
            Thanks for your input.
          </div>
              </div>
              <!-- // comments section -->
            </div>
          </div>

<div class="col-md-3 col-sm-12 cols">
	 <div class="container">
        <h2>Welcome to Kelele Safi</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

      </div>

    </div> 	
        </div>
        <div class="card-footer text-muted">
          
        </div>
      </div>
    </div>
    
  </div>
  <div class="footer">
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