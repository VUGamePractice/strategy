
<?php

    include_once("model");

    class Controller
    {

        public $model;

        public function __construct($model)
        {
            $this->model = $this->loadModel($model);
        }

    }
