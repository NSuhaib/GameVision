<?php

if ($_POST)
{  
  $fid = htmlspecialchars(stripslashes($_POST['userid']));
  $fid = mysql_real_escape_string($fid);
  include("mysqli_connect.php");
  mysql_query("DELETE FROM reviews (review) WHERE game_id = $_POST['game_id']");
  mysql_free_result();
}
?>