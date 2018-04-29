<!-- Login + Register
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row">
    <div class="navbar-left navbar-links">
      <a class="button" href="#">HOME</a>
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
          <form class="modal-content animate" action="/action_page.php">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              
              <label for="stdid"><b>Student ID</b></label>
              <input type="number" placeholder="Student ID" name="stdid" max="999999999" required>
                
              <label for="name"><b>Full Name</b></label>
              <input type="text" placeholder="Full Name" name="name" required>
                
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
                
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

              <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
              </label>

              <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

              <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="button">Cancel</button>
                <button type="submit" class="button-primary">Register</button>
              </div>
            </div>
          </form>
        </div>
      <hr>
    </div>
  </div>

<!-- Body
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row">
    <div class="one-half column logo" style="margin-top: 20%">
      <img src="images/logo.png" width="30%">
      <h1>DoctorNAU</h1>
      <hr>
      <p>College is a stressful period of life for many students. Stress means sickness and sickness means trouble! Sometimes students are shy about their conditions or just simply scared of doctors. But it is necessary to get the proper diagnosis. Something dangerous might be in the hiding! Just use our simple and quick symptom checker to relieve yourself.</p>
    </div>
  </div>