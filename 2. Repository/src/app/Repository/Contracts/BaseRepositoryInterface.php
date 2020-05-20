<?php

namespace App\Repository\Contracts;

use App\Model\BaseModel;

interface BaseRepositoryInterface
{
    /*
    * create function
    * Method Declartion
    * @param array of attributes
    */
    public function create(array $attributes) : BaseModel;

    /*
    * update function
    * Method Declartion
    * @param array $data
    * @param mixed $attributeValue
    * @param string $attribute
    * @return model
    */
    public function update(array $data, $attributeValue, $attribute = "id") :BaseModel;


    /*
    * getAll function
    * Method Declartion
    * @param array of attributes
    */
    public function getAll($columns = array('*'));

    /*
    * Delet function
    * Method Declartion
    * @param $id
    */
    public function delete($id);

    /*
   * findByID function
   * Method Declartion
   * @param $id
   */
    public function findById($id, $columns = array('*'));


    /*
    * findBy function
    * Method Declartion
    * @param array of attributes $data
    */
    public function findBy($attribute, $data);


    /**
     * Paginate all
     * @param  integer $perPage
     * @param  array   $columns
     * @return \Illuminate\Pagination\Paginator
     */
    public function paginate($perPage = 15, $columns = ['*']);
}