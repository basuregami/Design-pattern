<?php
namespace App\Model;

use App\Model\BaseModel;

class User extends BaseModel{
	
	/**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'users';

	
	public $fillable = [
		'name',
		'email',
		'address',
		'status',
		'password'
	];
	

}