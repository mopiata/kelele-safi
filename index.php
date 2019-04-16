<?php include("includes/header.php")?>
<div class="row landing">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 site-purpose">
      <div class="jumbotron">
        <nav class="navbar navbar-expand-lg bg-transparent nav-login">
          <a class="navbar-brand" href="#">KELELE SAFI</a>
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
        <h1>Create Your Account</h1>
        <form id="signup">
          <div class="form-group">
            <input type="text" class="form-control" id="firstname" placeholder="First Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="surname" placeholder="Surame">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="newPassword" placeholder="New Password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <label for="name">Birth Date</label>
            <input type="date" class="form-control" id="dob">
          </div>
          <select class="custom-select custom-select-sm mb-3">
            <option selected>Choose your gender</option>
            <option value="female">Female</option>
            <option value="male">Male</option>
          </select>
          <br><br>
          <button type="submit" class="btn btn-info" id="create-account">Create Account</button>
        </form>
      </div>

      <div class="login">
        <h1>Sign in to Your Account</h1>
        <form id="login">
          <div class="form-group">
            <label for="email-login">Email</label>
            <input type="email" class="form-control" id="email-login">
          </div>
          <div class="form-group">
            <label for="password-login">Password</label>
            <input type="password" class="form-control" id="password-login">
          </div>
          <br>
          <button type="submit" class="btn btn-info" id="btn-sign-in">Sign In</button>
        </form>
      </div>

      <br><br>

      <button class="btn btn-danger google-signin">Sign in with Google</button>
      <span> <strong>or</strong> </span>
      <button class="btn btn-info btn-login">Login</button>
      <button class="btn btn-info btn-signup">Sign Up</button>
      
    </div>  
	
  <?php include("includes/footer.php")?>

	