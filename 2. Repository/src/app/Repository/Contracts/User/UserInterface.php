<?php

namespace App\Repository\Contracts\User;

use App\Model\BaseModel;
use App\Repository\Contracts\BaseRepositoryInterface;

interface UserInterface
{
    /*
   * findByID function
   * Method Declartion
   * @param $id
   */
  public function findById($id, $columns = array('*'));

}