<?php
session_start(); 
$reg = $_GET['regno'];
?>

<!doctype html>
<html lang="en">
<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
  <title></title>
</head>
<style>
  .container {
    margin-top: 70px;
  }

  .carousel-inner img {
    width: 100%;
    max-height: 600px
  }
  
  .header-text {
    position: absolute;
    top: 30%;
    color: #fff;
  }

  .header-text h2 {
    font-size: 40px;
    font-weight: bold;
  }

  .header-text h2 span {
    padding: 10px;
    color: #fff;
  }

  .btn-min-block {
    min-width: 170px;
    line-height: 26px;
  }

  .btn-theme {
    color: #fff;
    border-color: #fff;
    border-radius: 10px;
  }
</style>
<script>
    function view(){
      window.location.href="view.php?reg=<?php echo $reg; ?>";
    }
    function update(){
      window.location.href="edit.php?reg=<?php echo $reg; ?>";
    }
    function logout(){
      window.location.href="logout.php";
    }
</script>
<body>
  <div class="container">
      <div class="carousel-inner">
          <img src="img/education.png" alt="First slide">
          <div class="header-text hidden-xs">
            <div class="col-md-12 text-center">
              <h2>
                <span>Information Submited Successfully!!</span>
              </h2>
              <br>
              
              <div>
              <a class="btn btn-outline-light btn-lg m-2" onclick="view();" role="button" rel="nofollow"
              target="_blank">View Card</a>
              <hr>
              <a class="btn btn-outline-light btn-lg m-2" onclick="update();" target="_blank"
              role="button">Update Information</a>
              <hr>
              <a class="btn btn-outline-light btn-lg m-2" onclick="logout();" target="_blank"
              role="button">Log Out</a>

              </div>
            </div>
          </div>
      </div>
  </div>
</body>
</html>
