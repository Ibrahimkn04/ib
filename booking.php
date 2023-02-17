<?php
include 'userbase.php';
?>
<form method="POST">
    <table align="center">
<tr><td> Total Days Required</td><td><input type="text" name="tdays" maxlength="1" required class="form-control"></td></tr>
<tr><td>  Required Date</td><td><input type="date" name="rdate"  required class="form-control"></td></tr>


<tr><td><input type="submit" name="submit" value="BOOK" class="btn btn-success" align="center"></td></tr>

</table></form>

<?php
session_start();

include 'connection.php';

if(isset($_POST['submit']))
{
        $tdays=$_POST['tdays'];
        $turfid=$_GET['id'];
        $userid=$_SESSION['id'];
        $bdate=date('d/m/y');
           $rdate=$_POST['rdate'];
       
            
               $check = mysql_query("select count(*) as count from tbl_booking where userid='$userid' and turfid='$turfid'");
                echo $check; 
               $fetch = mysql_fetch_array($check);
                
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Added ")</script>';
               echo '<script>location.href="viewturfs.php"</script>';
    }
    else { 
        $qry = "insert into tbl_booking(userid,turfid,tdays,bdate,rdate,status) values('$userid','$turfid','$tdays','$bdate','$rdate','booked')";
     
        $exe = mysql_query($qry);
        if($exe){
             echo '<script>alert(" Booked ")</script>';
          
                echo '<script>location.href="viewturfs.php"</script>';
        }
       
           
        }
        }



        ?>

    
    
</form>