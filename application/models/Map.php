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
			'0.17'	=> 1 ,
			'0.33'	=> 2 ,
			'0.50'	=> 3 ,
			'0.66'	=> 4 ,
			'0.67'	=> 4 , 
			'0.83'	=> 5 ,
		);

		return $_map[$float];
	}

	public function get_static_map( $left , $dynamic)
	{
		$left 		= intval( $left);
		$dynamic 	= intval( $dynamic);

		$map = array(
			1 => array(
					1 => 5 ,
					2 => 3 ,
					3 => 2 ,
					4 => 5 ,
					5 => 3 ,
					6 => 2 ,
				) ,
			2 => array(
					1 => 6 ,
					2 => 4 ,
					3 => 1 , 
					4 => 6 ,
					5 => 4 , 
					6 => 1 ,
				) ,
			3 => array(
					1 => 7 ,
					2 => 1 ,
					3 => 4 ,
					4 => 7 , 
					5 => 1 , 
					6 => 4 ,
				) ,
			4 => array(
					1 => 8 ,
					2 => 2 ,
					3 => 3 ,
					4 => 8 ,
					5 => 2 ,
					6 => 3 ,
				) ,
			5 => array(
					1 => 1 ,
					2 => 4 , 
					3 => 6 ,
					4 => 1 , 
					5 => 4 ,
					6 => 6 ,
				) ,
			6 => array(
					1 => 2 , 
					2 => 8 ,
					3 => 5 , 
					4 => 2 ,
					5 => 8 ,
					6 => 5 ,
				) ,
			7 => array(
					1 => 3 , 
					2 => 5 ,
					3 => 8 ,
					4 => 3 , 
					5 => 5 ,
					6 => 8 ,
				) ,
			8 => array(
					1 => 4 , 
					2 => 6 ,
					3 => 7 ,
					4 => 4 ,
					5 => 6 ,
					6 => 7 ,
				) ,
		);

		return $map[$left][$dynamic];	

	}
}