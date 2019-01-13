<?php
  session_start();
  if (isset($_SESSION["user"])) {
    header("location:beranda.php");
  }
  include("function.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
<link rel="stylesheet" href="login.css">
   <head><title>LOGIN</title></head>
   <body>
     <?php
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "wrong") {
            echo "<h3>Username dan Password salah !</h3>";
          }
        }

        if (isset($_GET["notif"])) {
          if ($_GET["notif"] == "logout") {
            echo "<h3>Berhasil Logout! </h3>";
          }
        }

        if (isset($_POST['submit'])) {
          echo do_login($_POST['username'], $_POST['password']);
        }
      ?>
      <h2>Form Login</h2>
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="imgcontainer">
    <img src="boy.png"  alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label for=""> <b>Username</b> </label>
    <input type="text" name="username" placeholder="Input Your Username" value=""><br><br>
    <label for=""> <b>Password</b> </label>
    <input type="password" name="password" placeholder="Input Your Password" value=""><br><br>

    <button type="submit" name="submit" value="submit">Masuk</button>

  </div>
  <div class="container" style="background-color:rgba(0 ,0 ,0 ,0.2);">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" >LALI <a href="#" style="text-decoration:none; color:white;">password?</a></span>
  </div>
    </form>
   </body>
 </html>
