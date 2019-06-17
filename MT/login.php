<?php
include_once 'conn.php'; 
//signup
if(isset($_POST["submit"])){
  $a = $_POST['fname']; 
    $b= $_POST['lname']; 
    $c = $_POST['phone'];
    $d = $_POST['email']; 
    $e = $_POST['pass']; 
  $query="insert tbusers values(null,'$a','$b','$c','$d','$e')";
  $res=mysqli_query($link,$query);
  if(mysqli_affected_rows($link)==1)
  {
    $message = "You have Registered Successfully!! ";
                echo "<script type='text/javascript'>alert('$message');</script>";
  }
  else
    $message = "You have Already Registered";
                echo "<script type='text/javascript'>alert('$message');</script>";
}
//login
if(isset($_POST["sub"]))
{
    $a=$_POST["email"];
    $b=$_POST["pass"];
    $qry="call logincheck('$a','$b',@ret)";
    $res=  mysqli_query($link, $qry) ;
    $res1=mysqli_query($link,"select @ret") or die(mysqli_error($link));
    $r=mysqli_fetch_row($res1);
    $d=$r[0];
    if($d==-1)
    {
       $message = "Wrong Username ";
       echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else if($d==-2)
          {
            $message = "Wrong Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
          
 else 
      {
          $message = "You are Successfully Logged In!! ";
          echo "<script type='text/javascript'>alert('$message');location.href = 'userpage.php';</script>";

      }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
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
  <!-- CSS  -->
  
  <script>
function Valdata()
{
   /// alert('ss');
  
    var em=document.getElementById('email').value;
    var up=document.getElementById('pass1').value;
    var cp=document.getElementById('pass2').value;
    var s=true;
    
     
    if(up==null || up=="")
    {
        s=false;
        alert("password empty!!!<br>");   }   
         if(cp==null || cp=="")    
          {        s=false;       
           alert("confirm password empty!!!<br>");
          }
    if(cp!=up)
    {
        s=false;
        alert(" confirm password and user password are not same ");
    }
    if(!(up.length>=6 && up.length<=12))
    {
        s=false;
        alert("userpassword must be between 6 to 12!!!<br>");
    }
   
return s;
}



    

</script>

</head>
<body>


<div class="row" style="background-color:rgba(0,0,0,0); padding-top: 20px">
<div class="row">
<div class="col s5">
    
    
    <div class="card" style="background-color:rgba(0,0,0,0.02);">
        <br>
        <h5><center>Already a Member?</center></h5>

    <form name="f1" action="login.php" method="POST">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="pass" required>
          <label for="password">Password</label>
        </div>
    
       <br>
        <div class="col s12">
      <p class="forgot"><a href="#">Forgot Password?</a></p>
        </div>

        <div class="center-align">
      <input class="btn waves-effect waves-light amber" type="submit" name="sub" value="Login">
    </div>
    <br>
    </form>
    </div>      
</div>
<div class="col s6 ">
    
    
    <div class="card" style="background-color:rgba(0,0,0,0.02);">
    <br>
        <h5><center>Create a new account</center></h5> 

       <div class="row">
    <form class="col s12" action="login.php" method="post" onsubmit="return Valdata();">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="fname" required>
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate" name="lname" required>
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <input id="telephone" type="number" class="validate" name="phone" required>
          <label for="telephone">Phone Number</label>
        </div>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email" required>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass1" type="password" class="validate" name="pass" required>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="pass2" type="password" class="validate" name="cpass" required>
          <label for="password">Confirm Password</label>
        </div>
      </div>
   
     <div class="center-align">
      <input class="btn waves-effect waves-light amber" type="submit" name="submit" value="Sign Up"/>
    </div>
    <br>
  </div>
     </form>
     
    </div>

</div>
    </div>
</div>
 


  <!--  Scripts-->
  
  </body>
</html>
