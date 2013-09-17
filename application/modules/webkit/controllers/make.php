<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Webkit_make_module extends CI_Module {

	/**
	 * 构造函数
	 *
	 * @return void
	 * @author
	 **/
	function __construct()
	{
		parent::__construct();
		$this->load->model('map' , 'map');
	}

	function index( $d)
	{	
		$show = array();
		//中间结果值 ：横向值 + 0 + (横向值-8+纵向值)
		for( $i = 0 ; $i < 12 ; $i ++)
		{
			switch ($i) {
				case 0:
					//xy
					$y = floatval( $d[4] . $d[5]);
					break;
				case 1:
					//x+y
					$y = $d[4] + $d[5];
					break;
				case 2:
					//dxy
					$y = floatval( $d[3] . $d[4] . $d[5]);
					break;
				case 3:
					//d+x+y
					$y = $d[3] + $d[4] + $d[5];
					break;
				case 4:
					//abcd+xy
					$y = floatval( $d[0] . $d[1] . $d[2] . $d[3]) + floatval( $d[4] . $d[5]);
					break;
				case 5:
					//a+b+c+d+x+y
					$y = $d[0] + $d[1] + $d[2] + $d[3] + $d[4] + $d[5];
					break;
				case 6:
					//abc+dxy
					$y = floatval( $d[0] . $d[1] . $d[2]) + floatval( $d[3] . $d[4] . $d[5]);
					break;
				case 7:
					//abcdxy
					$y = floatval( $d[0] . $d[1] . $d[2] . $d[3] . $d[4] . $d[5]);
					break;
				case 8:
					//a+b+c+d+xy
				   	$y = $d[0] + $d[1] + $d[2] + $d[3] + floatval( $d[4] . $d[5]);
				   	break;
				case 9:
					//abcd+x+y
				 	$y = floatval( $d[0] . $d[1] . $d[2] . $d[3]) + $d[4] + $d[5];
				 	break;
				case 10:
				 	//abc+d+x+y
				 	$y = floatval( $d[0] . $d[1] . $d[2]) + $d[3] + $d[4] + $d[5];
				 	break;
				case 11:
					//a+b+c+dxy
				 	$y = $d[0] + $d[1] + $d[2] + floatval( $d[3] . $d[4] . $d[5]);
				 	break;
				default:
					break;
			}

			for( $j = 0 ; $j < 12 ; $j ++)
			{
				//echo '$show['.$i.']['.$j.'] ';

				switch ( $j) {
					case 0:
						$x = floatval( $d[0] . $d[1] . $d[2] . $d[3]); 
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;

						break;
					case 1:
						$x = $d[0] + $d[1] + $d[2] + $d[3]; 
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 2:
						$x = floatval( $d[0] . $d[1] . $d[2]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 3:
						$x = $d[0] + $d[1] + $d[2];
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 4:
						$x = floatval( $d[0] . $d[1] . $d[2] . $d[3]) + floatval( $d[4] . $d[5]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 5:
						$x = $d[0] + $d[1] + $d[2] + $d[3] + $d[4] + $d[5];
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 6:
						$x = floatval( $d[0] . $d[1] . $d[2]) + floatval( $d[3] . $d[4] . $d[5]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 7:
						$x = floatval( $d[0] . $d[1] . $d[2] . $d[3] . $d[4] . $d[5]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 8:
						$x = $d[0] + $d[1] + $d[2] + $d[3] + floatval( $d[4] . $d[5]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 9:
						$x = floatval( $d[0] . $d[1] . $d[2] . $d[3]) + $d[4] + $d[5];
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 10:
						$x = floatval( $d[0] . $d[1] . $d[2]) + $d[3] + $d[4] + $d[5];
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					case 11:
						$x = $d[0] + $d[1] + $d[2] + floatval( $d[3] . $d[4] . $d[5]);
						$show[$i][$j] = array('top' => $this->get_r( $x) , 'left' => $this->get_r( $y));

						$addon = $show[$i][$j]['left'] + 8 - $show[$i][$j]['top'];
						if( $addon > 8)
							$addon = $addon - 8;
						/*echo '[l] : '.$show[$i][$j]['left'] . ' [t] :'.$show[$i][$j]['top'];*/

						/*echo ' [c]'.*/ $show[$i][$j]['center'] = $show[$i][$j]['top'].'0'.$addon ;
						break;
					default:
						break;
				}

			}
			//var_dump( $show);

		}

		file_put_contents('cache/tmp.tlib', json_encode( $show)) ;

	}

	private function get_r( $number)
	{	
		$float = $number / 8.0;

		$int = intval( $number / 8);

		//取小数部分
		$pick = $float - floatval( $int);
		//取上下值
		return $this->map->get_map( $pick ) ;
	}
}