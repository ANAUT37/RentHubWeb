<?php

require './modules/docs/controller/Docs.php';


class DocsController {

    public function index() {
        $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

        $replace = str_replace('/www.renthub.es/docs','',$uri);
        $uri=$replace;

        /** @var Docs $docs */
        $docs= new Docs;
        $docs->init($uri);


    }
    public function parseUrl(){

    }
}
