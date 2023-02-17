
<?php

include 'connection.php';
$bid=$_GET['bid'];
$qry=mysql_query("update tbl_booking set status='confirmed' where id='".$bid."'");
if($qry)
{
    echo'<script>alert("Booking confirmed............")</script>';
    echo '<script>location.href="verfications.php"</script>';
}
?>