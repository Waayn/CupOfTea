<?php 

namespace App;

class Autoloader {

    static function register() {
        spl_autoload_register([
            __CLASS__, 
            'autoload'
        ]);
    }

    static function autoload($class) {

        //On retire App\ (le namespace)
        $class = str_replace(__NAMESPACE__ . '\\', '', $class);

        //On remplace les \ par des /
        $class = str_replace('\\', '/', $class);

        $directory = str_replace("/App", '', __DIR__);

        if (file_exists($directory.'/'.$class.'.php')){
            require $directory.'/'.$class.'.php';
        } else {
            require $directory.'/core/'.$class.'.php';
        }

    }
}