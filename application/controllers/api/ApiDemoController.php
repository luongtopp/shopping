<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
// require APPPATH . 'libraries/RestController.php';

class ApiDemoController extends RestController
{
    public function index() {
        echo"I am api";
        
    }
}
?>