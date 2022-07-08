<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function create($model)
    {
        return $this->model->create($model);
    }
   
}
?>
