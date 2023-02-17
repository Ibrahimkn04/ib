<?php
include 'adminbase.php';
?>
<style>
        
        table{
            
            margin-top:50px;
        
        }
        td{
                padding:4px;
                width:200px;
                    
         
        }
        th{
               background-color: lightcoral;
            
        }
        
        
        
        
    </style>
	<!--start-contact-->
 <form method="POST">
                    
<table align="center" >


   <tr>
                             <td> Select Manager</td>
                              <td><select class="form-control"  name="managerid">
                                 <?php
                                 include 'connection.php';
                                  $qry1="select * from tbl_manager";
                                  $res1=mysql_query($qry1);
                                  while($row1=mysql_fetch_array($res1))
                                    {
                                       echo "<option value='".$row1[0]."'>".$row1['name']."</option>";
                                    }
                                 ?>
                                 </select></td>
                         </tr>
                         
   <tr>
                             <td> Select Turf</td>
                              <td><select class="form-control"  name="turfid">
                                 <?php
                                 include 'connection.php';
                                  $qry1="select * from tbl_turf";
                                  $res1=mysql_query($qry1);
                                  while($row1=mysql_fetch_array($res1))
                                    {
                                       echo "<option value='".$row1[0]."'>".$row1['turfname']."</option>";
                                    }
                                 ?>
                                 </select></td>
                         </tr>
                         <tr><td><input type="submit" name="submit" value="ALLOCATE" class="btn btn-success" align="center"></td></tr>
</table>
 </form>
        
        <BR><BR><BR>
  
        <table border='4' align="center" cellspacing="5">
            <th  id="abc">  ALLOCATION ID    </th>
            <th> MANAGER ID    </th>
            <th> TURF ID  </th>
              <th> MANAGER NAME   </th>
                <th> TURF NAME  </th>
                                  <?php
            include 'connection.php';
            $qry=mysql_query("select tbl_allocation.id as aid,tbl_allocation.managerid,tbl_allocation.turfid,tbl_manager.name,tbl_turf.turfname from tbl_manager,tbl_allocation,tbl_turf where tbl_allocation.managerid=tbl_manager.id and tbl_allocation.turfid=tbl_turf.id");
            while($row=mysql_fetch_array($qry))
            {
                echo '<tr><td>'.$row['aid'].'</td><td>'.$row['managerid'].'</td><td>'.$row['turfid'].'</td><td>'.$row['name'].'</td><td>'.$row['turfname'].'</td></tr>'; 
            }
            ?>
            
        </table>
         <?php      
         include 'connection.php';
         if(isset($_POST['submit']))
         {
             $managerid=$_POST['managerid'];
             $turfid=$_POST['turfid'];
           $check = mysql_query("select count(*) as count from tbl_allocation where managerid='$managerid' and turfid='$turfid'");
    $fetch = mysql_fetch_array($check);
    if ($fetch['count'] > 0) {
        echo '<script> alert("Already Registered")</script>';
    }
   
    else {
       
        $qry = "insert into tbl_allocation(managerid,turfid) values('$managerid','$turfid')";
      
        $exe = mysql_query($qry);
  
         {
             echo '<script>alert("successfull")</script>';
           }
    }
         }
         
         ?>
