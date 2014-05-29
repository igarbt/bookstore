<?php

require 'config/database.php';
require 'config/paths.php';

//require 'libs/App.php';
//require 'libs/Controller.php';
//require 'libs/Model.php';
//require 'libs/View.php';

function __autoload($classname){
    $directories = array(
        'controllers/',
        'libs/',
        'models/'
    );

    foreach($directories as $directory)
    {
        if(file_exists($directory.$classname.'.php'))
        {
            require_once($directory.$classname.'.php');
            return;
        }
    }
}






$app = new App();