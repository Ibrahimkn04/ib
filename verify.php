
<?php

include 'connection.php';
$bid=$_GET['bid'];
$qry=mysql_query("update tbl_booking set status='verified' where id='".$bid."'");
if($qry)
{
    echo'<script>alert("Verified............")</script>';
    echo '<script>location.href="viewbookings.php"</script>';
}
?>