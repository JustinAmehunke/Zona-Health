<?php



function reclaimPostItem($name)
{
	if (isset($_POST[$name]))
		return $_POST[$name];
	else return '';
}
