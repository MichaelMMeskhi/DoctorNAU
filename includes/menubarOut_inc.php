<!-- Login + Register
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row">
    <div class="navbar-left navbar-links">
      <a class="button" href="index.php">HOME</a>
      <a class="button" href="#">FORUM</a>
      <a class="button" href="#">ABOUT</a>
      <hr>
    </div>

    <div class="navbar-right">
      <button onclick="document.getElementById('id01').style.display='block'">Login</button>

      <div id="id01" class="modal">
        <form action="includes/login_inc.php" method="POST" class="modal-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="images/rasuna.png" alt="Avatar" class="avatar">
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

        <div id="id02" class="modal">
          <form action="includes/signup_inc.php" method="POST"  class="modal-content animate">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              
              <label for="stdid"><b>Student ID</b></label>
              <input type="number" placeholder="Student ID" name="stdid" min="0" max="999999999" required>
              
              <label for="username"><b>Username</b></label>
              <input type="text" placeholder="Username" name="uname" required>

              <label for="fname"><b>First Name</b></label>
              <input type="text" placeholder="First Name" name="fname" required>

              <label for="lname"><b>Last Name</b></label>
              <input type="text" placeholder="Last Name" name="lname" required>
                
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
                
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

              <label>
                <input type="checkbox" name="tos" style="margin-top:20px"> By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
              </label>

              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="button">Cancel</button>
                <button type="submit" class="button-primary" name="submit">Register</button>
              </div>
            </div>
          </form>
        </div>
      <hr>
    </div>
  </div>