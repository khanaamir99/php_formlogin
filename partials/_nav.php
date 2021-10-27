<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
$loggedin = true;

}
else{
  $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/loginSystem">MyLogin</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/loginsystem/welcome.php">Home <span class="sr-only"></span></a>
      </li>';

      if(!$loggedin){

      echo '<li class="nav-item">
        <a class="nav-link" href="/loginsystem/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/loginsystem/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
      </li>';
      }


    echo'</ul>
  </div>
</nav>';
?>