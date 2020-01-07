<?php

namespace App\Repositories;



abstract class CoreRepository {

    protected $model;


    public function __constrcut(){

        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    protected function startCondition(){
        return clone $this->model;
    }
}










?>