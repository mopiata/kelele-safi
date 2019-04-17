<?php include("includes/header.php")?>
		

								
<div class="row landing">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 site-purpose">
      <div class="jumbotron">
        <nav class="navbar navbar-expand-lg bg-transparent nav-login">
          <a class="navbar-brand" href="#"><img src="img/logo.png" alt="Logo"></a>
        </nav>
        
        <br><br>
        <ul id="purpose-list">
          <li>Share your feedback</li>
          <li>Hear what people are saying</li>
          <li>Be part of the talk</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 login-signup">
      
      <div class="signup">
          <?php dispay_message() ?>

    	    <h1>Create Your Account</h1>
        <form id="signup" method="post" role="form" action="register.php">
          <div class="form-group">
            <input type="text" name="first_name" class="form-control" id="firs_tname" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" name="surname" class="form-control" id="surname" placeholder="Surname">
		  </div> 
		  <div class="form-group">
            <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" id="newPassword" placeholder="New Password">
          </div>
          <div class="form-group">
            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <label for="name">Birth Date</label>
            <input type="date" name="DOB" class="form-control" id="dob">
          </div>
          <select name="GENDER" class="custom-select custom-select-sm mb-3">
            <option selected>Choose your gender</option>
            <option value="female">Female </option>
            <option value="male">Male</option>
          </select>
          <br><br>
          <button type="submit" class="btn btn-info" id="create-account">Create Account</button>
        </form>
      </div> 
      <div class="login">
        <h1>Sign in to Your Account</h1>
        <form id="login" action="login.php" method="post">
          <div class="form-group">
            <label for="email-login">Username</label>
            
            <input type="text" name="username" class="form-control" id="email-login">
          </div>
          <div class="form-group">
            <label for="password-login">Password</label>
            <input type="password" name="password" class="form-control" id="password-login">
          </div>
          <br>
          <button type="submit" class="btn btn-info" id="btn-sign-in">Sign In</button>
        </form>
      </div>

      <br>

      <button class="btn btn-danger google-signin">Sign in with Google</button>
      <span> <strong>or</strong> </span>
      <button class="btn btn-info btn-login btn-login-show" id="btn-login-show">Login</button> 
      <!-- <a href="index_login.php" class="btn btn-primary">Login</a> -->
      <button class="btn btn-info btn-signup">Sign Up</button>
      
    </div>  
    
  <?php include("includes/footer.php")?>

	