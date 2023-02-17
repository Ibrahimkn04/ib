<?php
include 'userbase.php';

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
             <th>  TURF ID    </th>
   
             <th> TURF NAME </th>
            <th> LOCATION  </th>
           
           
             <th> TOTAL DAYS REQUIRED </th>
           <th>  REQUIRED DATE </th>
             <th> BOOKING DATE  </th>
             <th> STATUS  </th>
            <?php
            session_start();
            $userid=$_SESSION['id'];
            include 'connection.php';
            $qry=mysql_query("select tbl_turf.id as turfid,tbl_turf.turfname,tbl_turf.location,tbl_booking.tdays,tbl_booking.rdate,tbl_booking.bdate,tbl_booking.status from tbl_turf,tbl_booking where tbl_turf.id=tbl_booking.turfid and tbl_booking.userid='$userid'");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['turfid']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['tdays']."</td><td>".$row['rdate']."</td><td>".$row['bdate']."</td><td>".$row['status']."</td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          



