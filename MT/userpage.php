<?php
include_once 'conn.php';
?>

<!DOCTYPE html>
<html lan='en'>
<head>
  <title>Fall in love with learning</title>
  <link rel="icon" type="img/.jpg" href="img/logo.jpg"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alef' rel='stylesheet'>
  <link rel="stylesheet" href="css/demo.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,100' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="style.css">
<style type="text/css">
    .navbar{
      opacity:0.6;
    }
    input{
      width:100%;
      border:0;
      border-bottom:3px grey solid;
      transition: 0.5s;
      border-radius: 20px;
      outline:none;
    }
	.navbar-brand img{
      width:50px;
      height:30px;
    }
	.carousel{
      height:600px;
    }
    .carousel-item img{
      height:600px;
      width:100%;
    }
	
	</style>
<script>
    $(document).ready(function(){
      $(".navbar a,footer a").on('click',function(event){
         if(this.hash!==''){
          event.preventDefault();
          var hash=this.hash;

          $('html,body').animate({
            scrollTop: $(hash).offset().top
          },900, function(){
            window.location.hash=hash;
          });
         }
      });
    })
   </script>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#Body"><img src="img/logo1.jpg" alt="Friends"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="userpage.php">Home</a></li>
        
        <li class="nav-item"><a class="nav-link" href="#"></a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.php"  style="outline: none;">Logout</a></li>
        
      </ul>
    </div>
  </nav>
    <div class="carousel slide" data-ride="carousel" id="myCarousel">
    <ul class="carousel-indicators">
      <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/background3.jpg" alt="background3" >
      </div>
      <div class="carousel-item">
        <img src="img/background1.jpg" alt="background1" class="img-fluid" >
      </div>
      <div class="carousel-item">
        <img src="img/background2.jpg" alt="background2" class="img-fluid">
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next"><span class="carousel-control-next-icon"></span></a>
  </div>
  <br>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
        
        <form action="videos.php" method="post">
    <?php
    $qry ="select * from videos";
  $res =mysqli_query($GLOBALS['link'],$qry);
  
  echo"<table>";
  $i=2;
  while($r = mysqli_fetch_array($res))
  {
    $i++;
    if($i==3)
    {
      echo"<tr>";
      $i=0;
    }
    echo "<td>";
    echo "<div class ='card'>";
    echo "<div class='card-body'>";
    echo "<video width='320' height='240' controls>";
    echo "<source src='$r[3]' type='video/mp4'>";
    echo "Your browser does not support the video tag."; 
    echo "</video>";
    echo "<h4 class='card-title'>$r[1]</h4>";
    echo "<p class='card-text'>$r[2]</p>";
    echo " </div>";
    echo " </div>";
    echo "</td>"; 

   
      if($i==2)
      {
       
        echo"</tr>";
      }
      }
     echo"</table>";  
    ?>
  </form>
    </div>
    </div>

    </div>
    </div>

  <br><br><br>
  

<br>

<br>
  <footer id="Body">
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3><span>FALL IN LOVE with maths</span></h3>
        <p class="footer-links">
          
          <a href="#Body">Home</a>
          &nbsp;
          
          &nbsp;
          <a href="#Aboutus">About Us</a>
        </p>
        <p class="footer-company-name">Myself &copy; 2018</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>LOVELY PROFFESIONAL UNIVERSITY</span>JALANDHAR,PUNJAB</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>9490782306</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="friends@company.com">letslearnmaths@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About Me</span>
          Im Confident And skilled. TRY ME!!
        </p>

        <div class="footer-icons">

          <a href="https://www.facebook.com/lukeshbezawada"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>
    </footer>
  </footer>
  <div class="modal fade" id="Logout" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Logout</h4>
          <button type="button" class="close" data-dismiss="modal" style="outline: none;">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
            
            
            <button type="submit" class="btn btn-success" style="outline: none;">Logout</button>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="outline: none;">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>