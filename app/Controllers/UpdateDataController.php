<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

class UpdateDataController extends AbstractControllers {
    public function exec() {
        $missingAttribute;
        $userId = null;
            $response  = [
                'success' => true
            ];
        try {
            $requestVariables = $this->processServerElements->getVariables();
            
            if ((!$requestVariables) || (sizeof($requestVariables) === 0)){
                $missingAttribute = 'userIdIsNull';
                throw new \Exception("You need to inform userid variable");
    
            }
            
            foreach ($requestVariables as $requestVariable) {
                if($requestVariable['name'] === 'userId'){
                    $userId = $requestVariable['value'];
                }
                
            }
            if (!$userId){
                $missingAttribute = 'userIdIsNull';
                throw new \Exception("You need to inform userid variable");
    
            }
            
            $users = $this->pdo->query("SELECT * FROM user WHERE id_user = '{$userId}';")
                ->fetchAll();
            if (sizeof($users) === 0){
                $missingAttribute = 'thisUserNoExist';
                throw new \Exception("There is not record of this user in db");
        
            }
            $params =$this->processServerElements->getInputJSONData();


            dd($params);
            
        }catch (\Exception $e){
            $response = [
                'success' => false,
                'message' => $e->getMessage(),
                'missingAttribute' => $missingAttribute
            ];
        }
       
        view($response);
    }
}