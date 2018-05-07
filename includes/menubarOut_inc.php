<!-- Login + Register
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row">
    <div class="navbar-left navbar-links">
      <a class="button" href="index.php">HOME</a>
      <a class="button" href="#">ABOUT</a>
      <hr>
    </div>

    <div class="navbar-right">
      <button onclick="document.getElementById('id01').style.display='block'">Login</button>

      <div id="id01" class="login">
        <form action="includes/login_inc.php" method="POST" class="login-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h1>Log In</h1>
              <p>Please enter your username and password.</p>
          </div>

          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button class="button-primary" type="submit" name="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>

          <div class="container">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="button">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
        
        <button onclick="document.getElementById('id02').style.display='block'" class="button-primary">Register</button>

            <div id="id02" class="register">
              <form action="includes/signup_inc.php" method="POST"  class="register-content animate">
                <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                <div class="container">
                  <div class="imgcontainer">
                      <h1>Register</h1>
                      <p>Please fill out this form to create an account.</p>
                  </div>
                  <hr>

                 <div class="row">
                    <div class="three columns">
                      <label for="stdid"><b>Student ID</b></label>
                      <input type="number" placeholder="Student ID" name="stdid" min="0" max="999999999" required>
                    </div>
                 </div>
                    
                 <div class="row">
                    <div class="six columns">
                      <label for="username"><b>Username</b></label>
                      <input type="text" placeholder="Username" name="uname" required>
                    </div>
                    <div class="six columns">
                      <label for="fname"><b>Full Name</b></label>
                      <input type="text" placeholder="Full Name" name="fname" required>  
                    </div>
                  </div>

                  <div class="row">
                    <div class="six columns">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email" required>
                    </div>
                    <div class="six columns">
                        <label for="phone"><b>Phone</b></label>
                        <input type="text" placeholder="832-123-0000" name="phone" required>
                    </div>
                  </div>
                    
                 <div class="row">
                    <div class="six columns">
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                    </div>
                    <div class="six columns">
                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                    </div>
                  </div>

                 <label>
                    <input type="checkbox" name="tos" style="margin-top:20px"> By creating an account you agree to our <a href="#" style="color:dodgerblue" required>Terms &amp; Privacy</a>.
                </label>
                   
                  <div class="clearfix">
                    <button class="twelve columns button-primary" type="submit" class="button-primary" name="submit">Register</button>
                    <button class="twelve columns" type="button" onclick="document.getElementById('id02').style.display='none'" class="button">Cancel</button>
                  </div>
            </div>
          </form>
        </div>
      <hr>
    </div>
  </div>