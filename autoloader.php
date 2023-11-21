<?php

function controllers_autoloader($nameclass){
    include 'controllers/' . $nameclass . '.php';
}

spl_autoload_register('controllers_autoloader');