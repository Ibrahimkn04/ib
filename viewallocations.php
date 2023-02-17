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
<table border='4' align="center" cellspacing="5">
            <th  id="abc">  ALLOCATION ID    </th>
            <th> MANAGER ID    </th>
            <th> TURF ID  </th>
              <th> MANAGER NAME   </th>
                <th> TURF NAME  </th>
                <th> LOCATION </th>
                <th> MAX PEOPLE </th>
                
             <?php
             session_start();
             $managerid=$_SESSION['id'];
            include 'connection.php';
            
            $qry=mysql_query("select tbl_allocation.id as aid,tbl_allocation.managerid,tbl_allocation.turfid,tbl_manager.name,tbl_turf.turfname,tbl_turf.location,tbl_turf.maxpeople,tbl_turf.itemimage from tbl_manager,tbl_allocation,tbl_turf where tbl_allocation.managerid=tbl_manager.id and tbl_allocation.turfid=tbl_turf.id and tbl_allocation.managerid='$managerid'");
            while($row=mysql_fetch_array($qry))
            {
                echo '<tr><td>'.$row['aid'].'</td><td>'.$row['managerid'].'</td><td>'.$row['turfid'].'</td><td>'.$row['name'].'</td><td>'.$row['turfname'].'</td><td>'.$row['location'].'</td><td>'.$row['maxpeople'].'</td></tr>'; 
            }
            ?>
            
        </table>