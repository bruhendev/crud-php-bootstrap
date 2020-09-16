<?php

namespace App\Core;

class Controller {
    
    public function view($view, $params = []) {
        require_once '../App/views/template.php';
    }
        
}
