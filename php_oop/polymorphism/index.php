<?php 

spl_autoload_register(function ($class) {
    
    // classes is a directory where all
    // the above files are placed.
    include_once "classes/$class.php";
});
 
function getLogger($type) {
    switch($type) {
        case 'email':
            return new EmailLogger();
            break;
     
        case 'database':
            return new DBLogger();
            break;
     
        case 'file':
            return new FileLogger();
            break;
    }
}
 
$logger = getLogger('database');
 
$profile = new UserProfile($logger);
 
$profile->createUser();
 
?>