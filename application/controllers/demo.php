<?php

class Demo extends CI_Controller
{
	public function index()
	{
		$x = 1.0;
		$y = 2.0;
		$z = 3.0;

		var_dump( floatval( $x . $y . $z));
	}
}