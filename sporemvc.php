<?php
function site()
{
	$request = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';
	$controller='index';
	$action = 'index';
	$parameters = array();
	if (is_array($request))
	{
		$controller=$request[0]?$request[0]:'index';
		if (count($request)>1)
		{
			$action=$request[1]?$request[1]:'index';
		}
		if (count($request)>2)
		{
			$parameters= array_slice($request, 2);
		}
	}
	$function = 'c_'.$controller.'_'.$action;
	if (function_exists($function))
	{
		$GLOBALS['sporemvc_controller_name'] = $controller;
		$GLOBALS['sporemvc_controller_action'] = $action;
		$function($parameters);
	}
	else
	{
		die("Controller function $function is not defined");
	}
}

function view($name, $parameters=[])
{
	if (stripos($name, 'v_')===0)
	{
		$function = $name;
	}
	else
	{
		$function = 'v_'.$GLOBALS['sporemvc_controller_name'].'_'.$name;
	}
	if (function_exists($function))
	{
		return $function($parameters);
	}
	else
	{
		die("View function $function is not defined");
	}
}

function model($name, $parameters=[])
{
	if (stripos($name, 'm_')===0)
	{
		$function = $name;
	}
	else
	{
		$function = 'v_'.$GLOBALS['sporemvc_controller_name'].'_'.$name;
	}
	if (function_exists($function))
	{
		return $function($parameters);
	}
	else
	{
		die("Model function $function is not defined");
	}
}

?>