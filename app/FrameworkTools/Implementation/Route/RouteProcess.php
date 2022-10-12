<?php

namespace App\FrameworkTools\Implementation\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWordController;
use App\Controllers\InsertDataController;
use App\Controllers\TrainQueryController;

use App\FrameworkTools\Implementation\Route\GetTrait;

class RouteProcess{

    use Get;

    private static $processServerElements;

    public static function execute(){
        self::$processServerElements = ProcessServerElements::start();
        $routeArray =[];

        switch (self::$processServerElements->getVerb()){
                           
            case 'GET':
                return self::get();
            break;

            case 'POST':
                return self::post();
            break;

                                                                                                               
        }
                
    }
    private static function get(){
        switch (self::$processServerElements->getRoute()){
                    
            case '/hello-world':
                return (new HelloWordController)->execute();
            break;

            case '/train-query':
                return (new TrainQueryController)->execute();
            break;

            
        }
    }

    private static function post(){
        switch (self::$processServerElements->getRoute()){
                    
            case '/insert-data':
                return (new InsertDataController)->execute();
            break;

            case '/train-query':
                return (new TrainQueryController)->exec();
            break;

            
        }
    }
}                                                                                                                 