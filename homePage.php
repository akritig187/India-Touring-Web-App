<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<link href="./static/css/homePage.css" rel="stylesheet">

</head>

<body>
  <div class="container">

  <header>
    <h2><a href="#"><i class="ion-plane"></i>Virtual Guide</a></h2>
    <nav>
      <ul>
        <li>
          <a href="about.php" title="About">About</a>
        </li>
        
        <?php  if (isset($_SESSION['username'])) : ?>
            <li>Welcome <strong><?php echo $_SESSION['username']; ?></strong></li>
            <li> <a href="hPnew.php?logout='1'">Logout</a> </li>
        <?php endif ?>
      </ul>
    </nav>
  </header>

  <div class="cover">
    <h1>Discover what's out there.</h1>

    <ul>
      <li>
        <form method="POST" action="konark.php">
          <input type="submit" class="uploadBtn" value="Konark Temple">
        </form>
      </li>
      
      <li>
        <form method="POST" action="taj.php">
          <input type="submit" class="uploadBtn" value="Taj Mahal">
        </form>
      </li>

      <li>
        <form method="POST" action="Qutub.php">
          <input type="submit" class="uploadBtn" value="Qutub Minar">
        </form>
      </li>

      <li>
        <form method="POST" action="lotus.php">
          <input type="submit" class="uploadBtn" value="Lotus Temple">
        </form>
      </li>

      <li>
        <form method="POST" action="matri.php">
          <input type="submit" class="uploadBtn" value="MatriMandir">
        </form>
      </li>

    </ul>
  </div>

</div>
</body>
  

</body>
</html>