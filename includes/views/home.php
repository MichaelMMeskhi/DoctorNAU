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
      <a class="button button-primary" href="#">Register</a>

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