
<?php

include 'connection.php';
$id=$_GET['id'];
$qry=mysql_query("update tbl_reg set status='1' where id='".$id."'");
if($qry)
{
    echo'<script>alert("Approved............")</script>';
    echo '<script>location.href="approveusers.php"</script>';
}
?>