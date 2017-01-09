<?php
function c_index_index($parameters)
{
	$data = model('m_frameworkinfo_index');
	print view('v_frameworkinfo_index', $data);
}

function c_frameworkinfo_index($parameters)
{
	$data = model('m_frameworkinfo_index');
	print view('v_frameworkinfo_index', $data);
}

function m_frameworkinfo_index($parameters)
{
	return file_get_contents('manual.html');
}

function v_frameworkinfo_index($parameters)
{
	return $parameters;
}
?>
