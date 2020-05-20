<?php

namespace App\Repository\Implementation\User;

use App\Model\User;
use App\Repository\Contracts\User\UserInterface;
use App\Repository\Implementation\BaseRepository;

class UserRepository extends BaseRepository implements UserInterface 
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new User;
    }
   


  
    
}