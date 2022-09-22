<?php

namespace App\FrameworkTools\Implementation\Route;

use App\FrameworkTools\ProcessServerElements;
use App\Controllers\HelloWordController;
use App\Controllers\InsertDataController;
use App\Controllers\TrainQueryController;

class RouteProcess{

    public static function execute(){
        $processServerElements = ProcessServerElements::start();
        $routeArray =[];

        switch ($processServerElements->getVerb()){
            case 'GET':

                switch ($processServerElements->getRoute()){
                    
                    case '/car':

                        return (new HelloWordController)->car();
                    break;
                    case '/car/id-car':

                        return (new HelloWordController)->carid();
                    break;
                    case '/car/name':

                        return (new HelloWordController)->carname();
                    break;
                    case '/seller':

                        return (new HelloWordController)->seller();
                    break;
                    case '/seller/id-seller':

                        return (new HelloWordController)->idseller();
                    break;

                    case '/seller/name':

                        return (new HelloWordController)->sellername();
                    break;
                    case '/seller/get-all-cars-seller':

                        return (new HelloWordController)->sellercar();
                    break;
                    case '/buyer':

                        return (new HelloWordController)->buyer();
                    break;
                    case '/buyer/id-buyer':

                        return (new HelloWordController)->buyerid();
                    break;
                    case '/buyer/name':

                        return (new HelloWordController)->buyername();
                    break;
                    case '/buyer/get-all-cars':

                        return (new HelloWordController)->carbuyer();
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