<?php
namespace App\Model;



abstract class BaseModel {
	

    /**
     * The table associated with the model.
     *
     * @var string
     */
    public $table;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';


    public static function __callStatic($methodName, $arguments)
    {
        
    }

    /**
     * Dynamically set attributes on the model.
     *
     * @param  string  $propertyName
     * @param  mixed  $value
     * @return void
     */
    public function __set($propertyName, $value)
    {
        $this->setAttribute($propertyName, $value);
    }

    public function setAttribute($attribute, $value)
    {
        $this->fillable[$attribute] = $value;
    }
    
}