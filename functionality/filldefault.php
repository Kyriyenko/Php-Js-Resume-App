<?php


$mysql=new mysqli('localhost','admin','ei7veeChu4bo','my_db');
$mysql->query("delete from `resume_data` where `type` = 'editable' ");
$mysql->close();

header('location:/index.php');

?>