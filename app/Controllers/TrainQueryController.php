<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;

use App\FrameworkTools\Database\DatabaseConnection;

class TrainQueryController extends AbstractControllers{

    public function execute() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function car() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM car;")
                ->fetchAll();

        view($users);
    }

    public function carid() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE id = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function carname() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM car WHERE id = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function seller() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function idseller() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function sellername() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function sellercar() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function buyer() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function buyerid() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function buyername() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

    public function carbuyer() {
        $requestsVariables = $this->processServerElements->getVariables();
        $valueOfVariable;
        
        foreach ($requestsVariables as $value) {
            if($value["name"] == "name") {
                $valueOfVariable = $value["value"];
            }
        }

        $databaseConnection = DatabaseConnection::start()->getPDO();

        $users = $databaseConnection
                ->query("SELECT * FROM user WHERE name = '{$valueOfVariable}';")
                ->fetchAll();

        view($users);
    }

}