<?php

$mysqlDatabaseName ='my_db';
$mysqlUserName ='admin';
$mysqlPassword ='ei7veeChu4bo';
$mysqlHostName ='localhost';
$mysqlImportFilename ='dump.sql';


$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
exec($command,$output,$worked);
switch($worked){
    case 0:
        echo 'The data from the file <b>' .$mysqlImportFilename .'</b> were successfully imported into the database <b>' .$mysqlDatabaseName .'</b>';
        break;
    case 1:
        echo 'An error occurred during the import. Please check if the file is in the same folder as this script. Also check the following data again:<br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr><tr><td>MySQL Import Dateiname:</td><td><b>' .$mysqlImportFilename .'</b></td></tr></table>';
        break;
}
?>


?>