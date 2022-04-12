<?php

abstract class Controller {

    protected $model;
    protected $auth;

    public function __construct()
    {
        if(isset($_SESSION['auth'])) {
            $this->auth = $_SESSION['auth'];
        }
        /* 2te Option, hier if Statement, dann kann man sich __construct in Author sparen weil Author ist dann Variable $this->model
        aber man muss alle Models oben inkludieren.
        if($this->model && class_exists($this->model)){
            $this->model = new $this->model;
        }
        */
        //Helper::vdump($this->model);
    }
}
?>
