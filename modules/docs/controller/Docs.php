<?php

require './utils/routes.php';

class Docs {
    function init($uri){
        if($uri===''){
            require $routes['/'];
        }else{
            require $routes[$uri];
        }

    }
}