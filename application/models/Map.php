<?php

class Map extends CI_Model
{
	public function get_map( $float)
	{	
		
		$float = strval($float);

		$map = array(
			'0'		=> 8 ,
			'0.125' => 1 , 
			'0.25' 	=> 2 , 
			'0.375' => 3 ,
			'0.5' 	=> 4 , 
			'0.625'	=> 5 ,
			'0.75'	=> 6 , 
			'0.875'	=> 7 ,
		);

		return $map[$float];
	}

	//动数对应的
	public function get_dynamic_map( $float)
	{
		$float = trim( strval( $float));

		$_map = array(
			'0.00'	=> 6 ,
			'0.16'	=> 1 , 
			'0.33'	=> 2 ,
			'0.50'	=> 3 ,
			'0.66'	=> 4 , 
			'0.83'	=> 5 ,
		);

		return $_map[$float];
	}
}