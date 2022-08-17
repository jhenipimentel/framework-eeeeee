<?php
namespace App\FrameworkTools;

class ProcessServerElements{

    private static $instance;

    private$documentRoot;
    private $serverName;
    private $httpHost;
    private $uri;
    private $variable;


    private function __construct(){
         //SINGLETON

    }
    public static function start(){
        if(!ProcessServerElements::$instance){
            ProcessServerElements::$instance = new ProcessServerElements();

        }

        return ProcessServerElements::$instance;
    }

    public function setDocumentRoot($documentRoot){
        $this->documentRoot = $documentRoot;
    }

    public function getDocumentRoot(){
        return $this->documents;
    }

    public function setServerName($serverName){
        $this->$serverName = $serverName;
    }

    public function getServerName(){
        return $this->ServerName;
    }

    public function setHttpHost($httpHost){
        $this->$httpHost = $httpHost;
    }

    public function getHttpHost(){
        return $this->$httpHost;
    }

    public function setUri($uri){
        $this->$uri = $uri;
    }

    public function getUri(){
        return $this->$uri;
    }

    public function setVariable($variable){
        $this->$variable = $variable;
    }

    public function getVariable(){
        return $this->$variable;
    }
}