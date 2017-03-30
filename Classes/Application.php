<?php
/**
 * This file is a part of starterMvc project.
 * Author: Mykola Danylov (n.danylov@gmail.com)
 * Date: 20.10.2016
 * Time: 18:09
 */

use \MykolaDanylov\RemotePics as RemotePics;

class Application
{
    private static $instance;

    public static function getInstance()
    {
        if (!isset(static::$instance)){
            static::$instance = new static;
        };
        return static::$instance;
    }

    public function run(){
        $picturesPathesArr = Model\Example::getResult();

        static::render('header');
        static::render('form');
        static::render('information');
        static::render('index', ['list' => $picturesPathesArr]);
        static::render('footer');
    }

    public static function render($viewName = '', array $vars = []){
        if($viewName === ''){
            $viewName = 'index';
        }
        $viewFileName = VIEW_DIR . $viewName . '.php';
        extract($vars);
        include $viewFileName;
    }

    protected function __construct(){
    }

    final private function __sleep(){
    }

    final private function __wakeup(){
    }

    final private function __clone(){
    }
}