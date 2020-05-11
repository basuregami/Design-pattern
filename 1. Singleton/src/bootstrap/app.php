<?php

/**
* Import all the config files
*/
function includeAllFile($folder)
{
	foreach(glob("{$folder}/*.php") as $configFile)
	{
		$configuration = include_once $configFile;
		foreach($configuration as $key => $config)
		{
			$GLOBALS[$key] = $config;
		}
	}
}

$configDirectory = __DIR__.'/../config';	
includeAllFile($configDirectory);

