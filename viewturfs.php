
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
               echo "<tr><td>".$row['id']."</td><td>".$row['turfname']."</td><td>".$row['location']."</td><td>".$row['maxpeople']."</td><td><img src='".$row['itemimage']."' alt='aa' style='width:300px;height:300px;'></td><td><a href='booking.php?id=".$row['id']."' class='btn btn-success'>BOOK</a></td></tr>";
                                                    
                                        }
            ?>
            
        </table>
          


