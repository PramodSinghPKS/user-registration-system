<?php
function user_exists($username) {
  $query = mysql_query("SELECT COUNT('user_id') FROM 'users' WHERE 'username' = '$username'");
}
?>