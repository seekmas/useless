<?php


class file_scan
{

	function cutstr($string, $length, $dot = ' ...') {
	if(strlen($string) <= $length) {
		return $string;
	}

	$pre = chr(1);
	$end = chr(1);
	$string = str_replace(array('&amp;', '&quot;', '&lt;', '&gt;'), array($pre.'&'.$end, $pre.'"'.$end, $pre.'<'.$end, $pre.'>'.$end), $string);

	$strcut = '';
	if(strtolower(CHARSET) == 'utf-8') {

		$n = $tn = $noc = 0;
		while($n < strlen($string)) {

			$t = ord($string[$n]);
			if($t == 9 || $t == 10 || (32 <= $t && $t <= 126)) {
				$tn = 1; $n++; $noc++;
			} elseif(194 <= $t && $t <= 223) {
				$tn = 2; $n += 2; $noc += 2;
			} elseif(224 <= $t && $t <= 239) {
				$tn = 3; $n += 3; $noc += 2;
			} elseif(240 <= $t && $t <= 247) {
				$tn = 4; $n += 4; $noc += 2;
			} elseif(248 <= $t && $t <= 251) {
				$tn = 5; $n += 5; $noc += 2;
			} elseif($t == 252 || $t == 253) {
				$tn = 6; $n += 6; $noc += 2;
			} else {
				$n++;
			}

			if($noc >= $length) {
				break;
			}

		}
		if($noc > $length) {
			$n -= $tn;
		}

		$strcut = substr($string, 0, $n);

	} else {
		for($i = 0; $i < $length; $i++) {
			$strcut .= ord($string[$i]) > 127 ? $string[$i].$string[++$i] : $string[$i];
		}
	}

	$strcut = str_replace(array($pre.'&'.$end, $pre.'"'.$end, $pre.'<'.$end, $pre.'>'.$end), array('&amp;', '&quot;', '&lt;', '&gt;'), $strcut);

	$pos = strrpos($strcut, chr(1));
	if($pos !== false) {
		$strcut = substr($strcut,0,$pos);
	}
	return $strcut.$dot;
	}

	public function change_scan()
	{	
		$list = $this->path();

		foreach ($list as $key => $value) {
			if( md5_file( $key) !== $value)
			{
				$str = '{"info":"\u6587\u4ef6\u4ee3\u7801\u88ab\u4fee\u6539\u8fc7 \u65e0\u6cd5\u6b63\u5e38\u8fd0\u884c \u8bf7\u8054\u7cfbmot\u6765\u83b7\u53d6\u6b63\u5e38\u4ee3\u7801"}';
				$str = json_decode( $str , true);
				die( $str['info']);
			}

		}
	}
	
	private function path()
	{
		return array( 
			'application/controllers/calc.php' 					=> '6c624d370b10ddff28f2beeec9ec5826' , 
			'application/models/Map.php'						=> 'a42d35613353b5e9baa4901825c14569' ,
			'application/views/calc/index.php'					=> '84c29eea76906eddd9c67c5889fcce6b' ,
			'application/modules/webkit/controllers/make.php'	=> 'f41c13f9764e3337ab42fabd15ab884d' ,
		);
	}

}