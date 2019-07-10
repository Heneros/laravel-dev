<?php

namespace App\Repostories;


use App\Models\BlogCategory as Model;
use Illuminate\Database\Eloquent\Collection;




class BlogCategoryRepository extends CoreRepository
 {

protected function getModelClass()
{
return Model::class;
}

public function getEdit($id){
    return $this->startConditions()->find($id);
}
public function getForCombox(){
    return $this->startConditions()->all();
}

}







?>