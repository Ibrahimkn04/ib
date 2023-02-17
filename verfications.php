<?php
include 'adminbase.php';


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
                         <th> ALLOCATED MANAGER </th>
                         <th> STATUS FROM MANAGER  </th>
            <?php
            
            include 'connection.php';
            $qry=mysql_query("SELECT tbl_booking.id AS bid,tbl_reg.id AS userid,tbl_reg.name,tbl_reg.address,tbl_turf.id AS turfid,tbl_turf.turfname,tbl_turf.location,tbl_booking.bdate,tbl_booking.tdays,tbl_manager.name AS mname,tbl_booking.status FROM tbl_booking,tbl_allocation,tbl_turf,tbl_reg,tbl_manager WHERE tbl_reg.id=tbl_booking.userid AND tbl_booking.turfid=tbl_turf.id AND tbl_allocation.managerid=tbl_manager.id AND tbl_booking.status='verified' AND tbl_allocation.`turfid`=tbl_turf.`id`");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['bid']."</td><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['turfid']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['bdate']."</td><td>".$row['tdays']."</td><td>".$row['mname']."</td><td>".$row['status']."</td><td><a href='confirm.php?bid=".$row['bid']."' class='btn btn-success'>CONFIRM BOOKING</a></td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          


