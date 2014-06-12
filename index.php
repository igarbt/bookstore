<?php

require 'config.php';

function __autoload($classname){
    $directories = array(
        LIBS,
        LIBS_FORM,
        CONTROLLERS,
        MODELS,
        UTIL
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