<?php
$conn=@mysqli_connect("localhost","root","") or die('unable to connect');
@mysqli_select_db($conn,"angulardb") or die('could not find db');
?>
