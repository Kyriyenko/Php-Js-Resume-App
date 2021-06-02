<?php

$page =$_POST['page'];

switch ($page) {
    case 'resume':
        require('../pages/resume.php');
        break;
    case 'login':
        require('../pages/login.php');
        break;
    case 'registration':
        require('../pages/registration.php');
        break;
    case 'form':
        require('../pages/form.php');
        break;
    case 'editpanel':
        require('../pages/editpanel.php');
        break;

}

?>