<?php

namespace App\Repository\Implementation;

use App\Database\Connection;
use App\Repository\Contracts\BaseRepositoryInterface;

abstract class BaseRepository 
{

    /** 
     * @Author: Basu Regami 
     * @Date: 2020-05-19 22:28:07 
     * @Desc:  connection object
     * @var object
     */
    protected $connection;

    /** 
     * @Author: Basu Regami  
     * @Date: 2020-05-19 22:28:09 
     * @Desc:  Database object
     * @var object
     */
    protected $db;

    

    /** 
     * @Author: Basu Regami  
    * @Date: 2020-05-19 22:28:21 
    * @Desc:  Namespace of the model
    * @var Object
    */
    protected $model;
    
    
    public function __construct()
    {
        $this->connection =  Connection::getInstance();
        $this->db = $this->connection->getConnection();
    }

    public function findById($id, $columns = array('*')) 
    {
        $sql = "SELECT * FROM {$this->model->table} WHERE id = $id";
        $this->connection->prepareStatement($sql);
        $this->connection->execute();
        $result = $this->connection->getResult();

       
        foreach ($row = $result->fetch_assoc() as $key => $value)
        {
            // $this->model->$key = $value;
            // print_r($this->model->$key = 'test');
            $this->model->$key = $value;
        }
        return $this->model;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM {$this->model->table}";
        $this->connection->prepareStatement($sql);
        $this->connection->execute();
        $result = $this->connection->getResult();

        $response = [];
        foreach ($row = $result->fetch_assoc() as $key => $value)
        {
            // $this->model->$key = $value;
            // print_r($this->model->$key = 'test');
            $this->model->$key = $value;

            array_push($response, $this->model);
        }
        return $response;
    }

    public function findBy($attribute, $value)
    {   
        
        $this->connection->bind('SSS', 'ram','sam','hari', 'gita');
        $sql = "SELECT * FROM {$this->model->table} WHERE {$attribute} = {$value}" ; 
        $this->connection->prepareStatement($sql);
        $this->connection->execute();
        $result = $this->connection->getResult();

        print_r($result);
        die;

        foreach ($row = $result->fetch_assoc() as $key => $value)
        {
            $this->model->$key = $value;

        }
        return $response;
    }
}