<!-- Login + Register
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div class="row">
    <div class="eight columns navbar-left navbar-links">
      <a class="four columns button" href="index.php">HOME</a>
      <a class="four columns button" href="index.php?page=symptoms">SYMPTOMS</a>
    </div>

    <div class="navbar-right">
      <!-- This is an example to get logged in user info -->
      <form action="includes/logout_inc.php" method="POST">
        <button type="submit" name="submit">Logout</button>
      </form>
    </div>
    <div style="position: absolute; top: 0; right: 150px; text-align:right; padding-top: 35px;">
        <?php 
            echo '<p>Hi, ' . $_SESSION['u_fname'] . '!</p>';
        ?>
    </div>
  </div>