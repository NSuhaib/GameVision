<?php

if ($_POST)
{  
  $fid = htmlspecialchars(stripslashes($_POST['userid']));
  $fid = mysql_real_escape_string($fid);
  include("mysqli_connect.php");
  mysql_query("UPDATE reviews WHERE user_id == $fid SET review = $review");
  mysql_free_result();
}
?>