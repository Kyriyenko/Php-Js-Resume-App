<?php

$database = 'my_db';
$user = 'admin';
$pass = 'ei7veeChu4bo';
$host = 'localhost';
$dir = dirname(__FILE__) . '/dump.sql';

echo "<h3>Backing up database to `<code>{$dir}</code>`</h3>";

exec("mysqldump --user={$user} --password={$pass} --host={$host} {$database} --result-file={$dir} 2>&1", $output);

var_dump($output);

?>