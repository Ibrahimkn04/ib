<?php
include 'managerbase.php';
?>


<style>
    th{
        
        background-color:lightsalmon;
        width:100px;
        height:50px;
    }
    td{
        padding:5px;
    }
</style>
<table style="width:100px;" border='5' align="center" cellspacing="5" >
             <th>  BOOKING ID    </th>
   <th>  USER ID    </th>
   
             <th> USER NAME </th>
            <th> ADDRESS  </th>
           
           
             <th> TURF ID </th>
           
             <th> TURF NAME  </th>
                 <th> TURF LOCATION  </th>
                     <th> BOOKING DATE  </th>
                         <th> TOTAL DAYS REQUIRED  </th>
            <?php
            session_start();
            $managerid=$_SESSION['id'];
            include 'connection.php';
            $qry=mysql_query("select tbl_booking.id as bid,tbl_reg.id as userid,tbl_reg.name,tbl_reg.address,tbl_turf.id as turfid,tbl_turf.turfname,tbl_turf.location,tbl_booking.bdate,tbl_booking.tdays from tbl_booking,tbl_allocation,tbl_turf,tbl_reg where tbl_booking.userid=tbl_reg.id and tbl_booking.turfid=tbl_turf.id and tbl_allocation.managerid='$managerid' and tbl_booking.status='confirmed'");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['bid']."</td><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['turfid']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['bdate']."</td><td>".$row['tdays']."</td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          


