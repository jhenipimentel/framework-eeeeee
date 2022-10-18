<?php

namespace App\FrameworkTools\Implementation\Route;

use App\Controllers\InsertDataController;

trait Post {

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