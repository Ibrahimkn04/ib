<?php
include 'adminbase.php';
?>

    <style>
        
        table{
            
            margin-top:5 0px;
        
        }
        td{
                padding:3px;
                width:200px
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
            
        $phone=$_POST['phone'];
       
        $email=$_POST['email'];
        $password=$_POST['password'];

         $check = mysql_query("select count(*) as count from tbl_manager where email='$email'");
    $fetch = mysql_fetch_array($check);
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Registered")</script>';
    }
    else {
       
        $qry = "insert into tbl_manager(name,address,place,phone,email,status) values('$name','$address','$place','$phone','$email','1')";
      
        $exe = mysql_query($qry);
        if ($qry) {
            $logqry = mysql_query("insert into tbl_login(email,password,usertype) values('$email','$password','Manager')");

            echo '<script>alert("successfull")</script>';
        } else {
            echo '<script>alert("login error")</script>';
        }
    }
}


        ?>