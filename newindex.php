<?php
session_start();

include("code.php");
include("function.php");

$user_data = check_login($conn);

?>

<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js"></script>
</head>
<title>Welcome to my website</title>
<style>
  body{
    background-image:url("https://avante.biz/wp-content/uploads/Background-Images-For-Websites/Background-Images-For-Websites-003.jpg");
    font-family:Times New Roman; 
  }
  span{
    color:crimson;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="newindex.php"><span>My</span>Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="newindex.php"><span>H</span>ome <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#"><span>A</span>bout <span>U</span>s</a>
      <a class="nav-item nav-link" href="logout.php"><span>L</span>ogout</a>
    </div>
  </div>
</nav>
<br><br>
<h1 style="text-align:center; color:white;"> Hello!!! &nbsp;<span><?php echo $user_data['username']; ?></span></h1>
<h1 style="text-align:center; color:white;">Welcome to my website </h1>
<h1 style="text-align:center; color:white;">How can i help you? </h1>
</body>
</html>