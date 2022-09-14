<?php

namespace App\FrameworkTools\Implementation\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWordController;
use App\Controllers\InsertDataController;

class RouteProcess{

    public static function execute(){
        $processServerElements = ProcessServerElements::start();
        $routeArray =[];

        switch ($processServerElements->getVerb()){
            case 'GET':

                switch ($processServerElements->getRoute()){
                    
                    case '/hello-world':

                        return (new HelloWordController)->execute();
                    break;
                }
            case 'POST':

                switch ($processServerElements->getRoute()){
                        
                    case '/insert-data':
    
                        return (new InsertDataController)->execute();
                    break;
                }
        }
                
    }
}