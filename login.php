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
			
<form method="post" enctype="multipart/form-data">
   
    <hr style="color: black;">
<table align="center">
 
<tr>
    <td>Email</td>
    <td><input type="email"  name="email" class="form-control" required></td>
  </tr>
<tr>
    <td>Password</td>
    <td><input type="password" name="password"  class="form-control" required ></td>
  </tr>
<tr>
    <td colspan="2"><input type="submit" align="center"  align="center" name="submit" class="btn btn-danger" value="Login" ></td>

  </tr>
  </table>
</form>
<br><br><br>

<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))
    {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $qry="select *from tbl_login where email='$email' and password='$password'";
    $check= mysql_query($qry);
           if(mysql_num_rows($check)==0)
               {
               echo "<script>alert('Username or password incorrect');</script>";
           }
           else
           {
               $row= mysql_fetch_assoc($check);           
             
               $_SESSION["id"]=$row["id"];
               if($row["usertype"]=="admin")
                {
                   echo "<script>window.location='adminhome.php'</script>";
                }
               else if($row["usertype"]=="Manager")
                             
                {
                   echo "<script>alert(' Welcome...');</script>";
                   $q2=  mysql_query("select * from tbl_manager where email='$email'");
                   $row1=  mysql_fetch_array($q2);
                   $_SESSION['id']=$row1['id'];
                    if($row1["status"]==0)
                    {
                        echo "<script>alert('Account Not Activated');</script>";
                    }
                   else
                   {
                    echo "<script>window.location='managerhome.php'</script>";
                   }
                }
                 else if($row["usertype"]=="user")
                             
                {
                   echo "<script>alert(' Welcome...');</script>";
                   $q2=  mysql_query("select * from tbl_reg where email='$email'");
                   $row1=  mysql_fetch_array($q2);
                   $_SESSION['id']=$row1['id'];
                    if($row1["status"]==0)
                    {
                        echo "<script>alert('Account Not Activated');</script>";
                    }
                   else
                   {
                    echo "<script>window.location='userhome.php'</script>";
                   }
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