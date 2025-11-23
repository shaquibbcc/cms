<?php


	function dumper($arr, $die=false)
	{

		echo "<pre>";
      	print_r($arr);
      	echo "</pre>";

      	if ($die == true) {
      		die();
      	}
	}