<?php

include 'connection.php';
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
<BR><BR><BR>
  
       <table border='4' align="center" cellspacing="5" >
            <th> ID    </th>
            <th> NAME    </th>
            <th> ADDRESS  </th>
                        <th> PLACE  </th>
            <th> AGE    </th>
            <th> CONTACT </th>
             <th> EMAIL </th>
            <?php
            include 'connection.php';
            $qry=mysql_query("select * from tbl_reg where status='0'");
            while($row=mysql_fetch_array($qry))
            {
                echo '<tr><td>'.$row['id'].'</td><td>'.$row['name'].'</td><td>'.$row['address'].'</td><td>'.$row['place'].'</td><td>'.$row['age'].'</td><td>'.$row['contact'].'</td><td>'.$row['email'].'</td><td><a href="approved.php?id='.$row['id'].'" class="btn btn-success">APPROVE</a></td></tr>'; 
            }
            ?>
            
        </table>
         
