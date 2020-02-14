<?php
defined('BASEPATH') OR exit('No direct script access allowed');

#require APPPATH.'libraries/RestController.php';
#use chriskacerguis\RestServer\RestController;

class Item extends RestController
{
    function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {
        $msg = 'Hello';
        if($msg)
        {
            $this->response($msg, 200);
        }
        else
        {
            $this->response([
                'status' => false,
                'message' => 'No greeting'
            ], 404);
        }
    }
}
