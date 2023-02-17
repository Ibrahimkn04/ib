<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>The Club Soccer flat Responsive Sports Category Bootstrap Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">	
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Bootstrap Responsive Templates, Iphone Compatible Templates, Smartphone Compatible Templates, Ipad Compatible Templates, Flat Responsive Templates"/>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic' rel='stylesheet' type='text/css'> 
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'> 
<script src="js/jquery-1.11.0.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<div class="head" id="home">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt=""></a>
			</div>
			<div class="header">
				<div class="menu">
                    <a class="toggleMenu" href="#"><img src="images/menu-icon.png" alt="" /> </a>
					<ul class="nav" id="nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="userreg.php">REGISTRATION</a></li>
						<li><a href="login.php">LOGIN</a></li>
						
					</ul>
                    <!----start-top-nav-script---->
		            <script type="text/javascript" src="js/responsive-nav.js"></script>
					<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
		<!----//End-top-nav-script---->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
    <style>
        
        table{
            
            margin-top:200px;
        
        }
        td{
                padding:3px;
                width:200px
        }
        #h{
            width: 600px;
            height: 600px;
            border: 3px solid orange;
            box-sizing: content-box;
          
        }
        
    </style>
	<!--start-contact-->
	<div class="contact">
		<div class="container" id="h">
			 <form method="POST">
                    
<table align="center">
<tr><td> Name</td><td><input type="text" name="name" required class="form-control"></td></tr>
<tr><td> Address</td><td><textarea name="address" required class="form-control"></textarea></td></tr>
<tr><td>Place</td><td><input type="text" name="place" required class="form-control"></td></tr>

<tr><td>Age</td><td><input type="text" name="age" required class="form-control"></td></tr>

<tr><td>Phone</td><td><input type="text" name="phone" maxlength="10" required class="form-control"></td></tr>

<tr><td> Email</td><td><input type="email" name="email" required class="form-control"></td></tr>

<tr><td> Password</td><td><input type="password" name="password" required class="form-control"></td></tr>
<tr><td><input type="submit" name="submit" value="REGISTER" class="btn btn-success" align="center"></td></tr>

</table></form>

<?php
include 'connection.php';
if(isset($_POST['submit']))
{
        $name=$_POST['name'];
         $address=$_POST['address'];
        $place=$_POST['place'];
            $age=$_POST['age'];
        $phone=$_POST['phone'];
       
        $email=$_POST['email'];
        $password=$_POST['password'];

         $check = mysql_query("select count(*) as count from tbl_reg where email='$email'");
    $fetch = mysql_fetch_array($check);
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Registered")</script>';
    }
    else {
       
        $qry = "insert into tbl_reg(name,address,place,age,contact,email,status) values('$name','$address','$place','$age','$phone','$email','0')";
      
        $exe = mysql_query($qry);
        if ($qry) {
            $logqry = mysql_query("insert into tbl_login(email,password,usertype) values('$email','$password','user')");

            echo '<script>alert("successfull")</script>';
        } else {
            echo '<script>alert("login error")</script>';
        }
    }
}


        ?>
		</div>
	</div>
	<!--end-contact-->
	<!--start-footer-->
		<!--end-footer-->
</body>
</html>