<?php
include 'adminbase.php';
?>

<form method="POST" enctype="multipart/form-data">
                    
<table align="center">
<tr><td> Name</td><td><input type="text" name="tname" required class="form-control"></td></tr>
<tr><td> Location</td><td><input type="text" name="location" required class="form-control"></td></tr>
<tr><td>Max People</td><td><input type="text" name="maxpeople" required class="form-control"></td></tr>



 <tr>
                <td>Upload image</td>
                <td><input type="file" name="img" required="" class="form-control"></td>
            </tr>


<tr><td><input type="submit" name="submit" value="ADD" class="btn btn-success" align="center"></td></tr>

</table></form>

<?php
include 'connection.php';
if(isset($_POST['submit']))
{
        $tname=$_POST['tname'];
         $location=$_POST['location'];
        $maxpeople=$_POST['maxpeople'];
            
         $upfold="images/";
   $mimage=$upfold.basename($_FILES['img']['name']);
   move_uploaded_file($_FILES['img']['tmp_name'],$mimage);
            
               $check = mysql_query("select count(*) as count from tbl_turf where turfname='$tname'");
                echo $check; 
               $fetch = mysql_fetch_array($check);
                
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Added ")</script>';
    }
    else { 
        $qry = "insert into tbl_turf (turfname,location,maxpeople,itemimage) values('$tname','$location','$maxpeople','$mimage')";
     
        $exe = mysql_query($qry);
        if($exe){
             echo '<script>alert(" product Added")</script>';
          
            
        }
       
           
        }
        }



        ?>


<table style="width:100px;" border='5' align="center" cellspacing="5" >
             <th> ID    </th>
   
             <th> TURF NAME </th>
            <th> LOCATION  </th>
           
           
             <th> MAXIMUM PEOPLE </th>
           
             <th> TURF  </th>
            <?php
            include 'connection.php';
            $qry=mysql_query("select * from tbl_turf");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['id']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['maxpeople']."</td><td><img src='".$row['itemimage']."' alt='aa' style='width:200px;height:200px;'></td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          


