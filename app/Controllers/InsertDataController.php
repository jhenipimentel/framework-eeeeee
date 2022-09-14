<?php

namespace App\Controllers;

use App\FrameworkTools\Abstracts\Controllers\AbstractControllers;


class InsertDataController extends AbstractControllers{
    public function exe(){
        view([
            'success' => true
        ]);
    }
}   