<?php

namespace App\Helper;

class Str
{
	public static function pasalCase($string)
	{
		 $value = ucwords(str_replace(['-', '_'], ' ', $string));
		 return $value;
	}

}