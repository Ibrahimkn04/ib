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

<br><br><br><table style="width:100px;" border='5' align="center" cellspacing="5" >
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
            
            
         
                include 'connection.php';
                
            $qry=mysql_query("SELECT tbl_booking.id AS bid,tbl_reg.id AS userid,tbl_reg.name,tbl_reg.address,tbl_turf.id AS turfid,tbl_turf.turfname,tbl_turf.location,tbl_booking.bdate,tbl_booking.tdays,tbl_booking.status FROM tbl_booking,tbl_turf,tbl_reg WHERE tbl_reg.id=tbl_booking.userid AND tbl_booking.turfid=tbl_turf.id  AND tbl_booking.status='confirmed'");
            while($row=mysql_fetch_array($qry))
            {
               echo "<tr><td>".$row['bid']."</td><td>".$row['userid']."</td><td>".$row['name']."</td><td>".$row['address']."</td><td>".$row['turfid']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['bdate']."</td><td>".$row['tdays']."</td></tr>";
                                                    
                                        }
            
            ?>
            
        </table>
          


