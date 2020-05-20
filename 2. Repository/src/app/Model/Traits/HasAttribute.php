<?php

namespace App\Model\Traits;

use App\Helper\Str;

trait HasAttribute
{
     /**
     * Set a given attribute on the model.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return mixed
     */
    public function setAttribute($attribute, $value)
    {
        /**
        * Check if model has setter. If there is setter model setter will be call dynamcically
        * Developer can use setter to modify the user value before storing into the database
        */
        if ($this->attributeHasSetter($attribute)) {
            return $this->setAttributeSetterValue($key, $value);
        }

        // If this attribute contains a JSON ->, we'll set the proper value in the
        // attribute's underlying array. This takes care of properly nesting an
        // attribute in the array's value in the case of deeply nested items.
        if (Str::contains($key, '->')) {
            return $this->fillJsonAttribute($key, $value);
        }

        $this->attributes[$key] = $value;

        return $this;
    }

     /**
     * Get the value of the attribute
     *
     * @param string $attribute
     * @return mixed
     */
    public function getAttribute($attribute)
    {
        if (false === array_key_exists($attribute, $this->attributes)) {
            return $default;
        }

        return $this->attributes[$attribute];
    }



    protected function attributeHasSetter($attribute)
    {
        return method_exists($this, 'set'.Str::pasalCase($attribute).'Attribute');
    }

    protected function setAttributeSetterValue($attribute, $value)
    {
        return $this->{'set'.Str::pasalCase($attribute).'Attribute'}($value);
    }

} 