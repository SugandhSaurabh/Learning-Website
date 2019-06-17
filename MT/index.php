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

    input[type=email]:focus {
      border:3px solid #555;
    }
    input[type=password]:focus{
      border:3px solid #555;
    }
    input[type=text]:focus{
      border:3px solid #555;
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
<body id="Body">
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#Body"><img src="img/Friends.jpg" alt="Friends"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="#Body">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#Contactus">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#Aboutus">About Us</a></li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="login.php" style="outline: none;">Login</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php" style="outline: none;">SignUp</a></li>
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
  <br> <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/Square.jpg" alt="Square" class="img-fluid rounded card-img-top" >
          <div class="card-body">
            <h4 class="card-title">area of square</h4>
            <p class="card-text">Looking for how to find out area of a square by simple and easy way.</p>
            <a class="btn btn-primary" href="login.php">Watch Now</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
         <div class="card">
          <img src="img/triangle.jpg" alt="traingle" class="img-fluid rounded card-img-top">
          <div class="card-body">
            <h4 class="card-title">area of triangle</h4>
            <p class="card-text"> We are having an easy way to find out the area of a triangle by just watching our video.</p>
            <a class="btn btn-primary" href="login.php" >Watch Now</a>
	
        </div>
      </div>
      </div>
      <div class="col-md-4">
         <div class="card">
          <img src="img/circle.jpg" alt="circle" class="img-fluid rounded card-img-top">
          <div class="card-body">
            <h4 class="card-title">area of circle</h4>
            <p class="card-text">If you are confused to find out the area of circle then learn quickly by just watching our video</p>
            <a class="btn btn-primary" href="login.php">Watch Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="container" id="Aboutus">
    <div class="row">
      <div class="col-md-6">
          <h4 style="font-family:'Amaranth'; font-size:30px; "> About Us</h4>
          <p style="font-family: 'Alef';font-size: 18px;">fall in love with learning maths in an easy and attractive way of teaching. Our is  focus to provide a better way to students who are looking for learning from graphics and animations. our website provides you the very simple way to gain knowledge without any pre requirement of knowledge on maths</p>
          <br>
          <h5 style="font-family:'Amaranth'; font-size:30px; ">motive</h5>
          <p style="font-family: 'Alef';font-size: 18px;">Our  motive is to create the kind of website that most students want: easy to find, stylish and appealing, quick learning, mobile responsive and search engine friendly.</p>
          <br>
          <h5 style="font-family:'Amaranth'; font-size:30px; ">Mission</h5>
          <p style="font-family: 'Alef';font-size: 18px;">We’ve designed our website  providing everything that a student can learn by just watching any video. our website provides a simple and quick knowledge to our clients</p>
      </div>
      <div class="col-md-6">
        <img src="img/About1.jpg" alt="About1" class="img-fluid">
      </div>
    </div>
  </div>
  <br>
  <div class="container" id="Contactus">
    <div class="row">
      <div class="col-md-6">
        <img src="img/logo1.jpg" alt="logo1" class="img-fluid rounded" style="height:100%; width:100%">
      </div>
      <div class="col-md-6">
        <h4 style="text-align: center">Contact Us</h4>
        <form>
          <div class="form-group">
          <label for="Cname" style="font-family:'Amaranth'; font-size:20px;">Name</label>
          <br>
          <input type="text" placeholder="Enter Your Name" id="Cname" name="Contactname" required></div>
          <div class="form-group">
          <label for="Cmail" style="font-family:'Amaranth'; font-size:20px;">Email</label>
          <br>
          <input type="email" placeholder="Enter email" id="Cmail" name="Contactemail" required></div>
          
          <div class="form-group">
          <label for="Cquery" style="font-family:'Amaranth'; font-size:20px;">Query</label>
          <br>
          <input type="text" placeholder="Enter Your Query" id="Cquery" name="Contactquery" required></div>
          
          <div class="form-group">
          <label for="Cdesc" style="font-family:'Amaranth'; font-size:20px;">Description</label>
          <br>
          <textarea rows="5" id="Cdesc" class="form-control" required></textarea></div>
          
          <button type="submit" class="btn btn-success" style="outline:none">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <footer id="Body">
    <footer class="footer-distributed">
      <div class="footer-left">
        <h3><span>FALL IN LOVE with maths</span></h3>
        <p class="footer-links">
          
          <a href="#Body">Home</a>
          &nbsp;
          <a href="#Contactus">Contact Us</a>
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
          <p><a href="friends@company.com">lukeshbezawada66@gmail.com</a></p>
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
  <div class="modal fade" id="LoginModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" style="outline: none;">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
            <label for="LUname">Username</label>
            <br>
            <input type="email" placeholder="Enter Email" id="Uname" name="LUsername" required></div>
            
            <div class="form-group">
            <label for="Lpass">Password</label>
            <br>
            <input type="password" placeholder="Enter Password" id="Lpass" name="LPassword" required></div>
            
            <button type="submit" class="btn btn-success" style="outline: none;">Submit</button>
            <h6>If you are not a member <a href="#"  data-target="#SignupModal" data-toggle="modal" data-dismiss="modal" style="outline: none;">Register Here</a></h6>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="outline: none;">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" role="dialog" id="SignupModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">SignUp</h4>
          <button type="button" class="close" data-dismiss="modal" style="outline: none;">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
            <label for="SFname">First Name</label>
            <br>
            <input type="text" id="SFname" name="Firstname" placeholder="Enter Firstname" required></div>
            
            <div class="form-group">
            <label for="SLname">Last Name</label>
            <br>
            <input type="text" id="SLname" name="Lastname" placeholder="Enter Lastname" required></div>
          
            <div class="form-group">
            <label for="SUname">Username</label>
            <br>
            <input type="email" id="SUname" name="SUsername" placeholder="Enter Email" required></div>
            
            <div class="form-group">
            <label for="SPass">Password</label>
            <br>
            <input type="password" id="SPass" name="SPassword" placeholder="Enter Password" required></div>
            
            <button type="submit" class="btn btn-success" style="outline: none;">Submit</button>
            <h6>Already a member? <a href="#" data-target="#LoginModal" data-toggle="modal" data-dismiss="modal" style="outline: none;">Login Here</a></h6>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="outline: none;">Close</button>
          </div>
    </div>
  </div>
  
  </div>
  <div class="modal fade" role="dialog" id="payment">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">PAYMENT</h4>
          <button type="button" class="close" data-dismiss="modal" style="outline: none;">&times;</button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
            <label for="SFname">card holder Name</label>
            <br>
            <input type="text" id="SFname" name="card holder name" placeholder="Enter card holders name" required></div>
            

			 <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>
  <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>	
 <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>	
			
			
			
          
            <div class="form-group">
            
            <br>
            <input type="email" id="SUname" name="SUsername" placeholder="Enter Email" required></div>
            
           
            
            <button type="submit" class="btn btn-success" style="outline: none;">Subscribe</button>
            
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="outline: none;">Close</button>
          </div>
    </div>
  </div>
  
  
  
 
  <div id="video1" class="collapse">
			<div class="container">
			<video  controls>
			<source src="videoplayback (5).mp4" type="video/mp4">
			</video>
			</div>
          </div>
  
  
  
  
  
</body>
</html>