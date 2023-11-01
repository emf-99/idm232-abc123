<?php
consoleMsg("fun.php file LOADED!");

// define all global vars here
global $APP_CONFIG;


function consoleMsg ($msg) {
    echo '<script type="text/javascript">console.log("'. $msg .'");</script>';
}
?>