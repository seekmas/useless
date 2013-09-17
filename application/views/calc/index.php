<form action="" method="post">
<div class="control-group">
	<div class="controls">
		<h3>输入数据</h3>
		<input type="text" name="origin_data" />
	</div>
</div>	

<div class="control-group">
	<div class="controls">
		<button type="submit" class="btn btn-primary" name="posts" value="1">提交</button>
	</div>
</div>	
</form>

<?php 
$ci = & get_instance();
$list = $ci->get_list();
?>

<div class="page-header">
	<h4>
		[ a : <?php echo $list[0];?> ]
		[ b : <?php echo $list[1];?> ]
		[ c : <?php echo $list[2];?> ]
		[ d : <?php echo $list[3];?> ]
		[ x : <?php echo $list[4];?> ]
		[ y : <?php echo $list[5];?> ]

		<small>输入的数据为 <?php echo $this->input->post('origin_data');?></small>
	</h4>
</div>

<?php
if( isset( $status)){

	$this->load->module('webkit/make/index' , array( $ci->get_list()));

	$file = file_get_contents('cache/tmp.tlib');

	$data = json_decode( $file , true);

	$flag = true;
}
?>
<table class="table table-bordered table-condensed">
<?php if( $flag){?>

	<tr>
		<td></td>
		<td></td>
		<td>上值</td>
		<td><?php echo $data[0][0]['top'];?></td>
		<td><?php echo $data[0][1]['top'];?></td>
		<td><?php echo $data[0][2]['top'];?></td>
		<td><?php echo $data[0][3]['top'];?></td>
		<td><?php echo $data[0][4]['top'];?></td>
		<td><?php echo $data[0][5]['top'];?></td>
		<td><?php echo $data[0][6]['top'];?></td>
		<td><?php echo $data[0][7]['top'];?></td>
		<td><?php echo $data[0][8]['top'];?></td>
		<td><?php echo $data[0][9]['top'];?></td>
		<td><?php echo $data[0][10]['top'];?></td>
		<td><?php echo $data[0][11]['top'];?></td>
	</tr>
	
<?php }?>

	<tr>
		<td>动值</td>
		<td>下值</td>
		<td>&nbsp;</td>
		<td>abcd </td>
		<td>a+b+c+d</td>
		<td>abc</td>
		<td>a+b+c</td>
		<td>abcd+xy</td>
		<td>a+b+c+d+x+y</td>
		<td>abc+dxy</td>
		<td>abcdxy</td>
		<td>a+b+c+d+xy</td>
		<td>abcd+x+y</td>
		<td>abc+d+x+y</td>
		<td>a+b+c+dxy</td>
	</tr>
<?php if( $flag){?>
	<tr>
		<td><?php echo $data[0][0]['dynamic'];?></td>
		<td><?php echo $data[0][0]['left'];?></td>
		<td>xy</td>
		<td><?php echo $data[0][0]['center'];?></td>
		<td><?php echo $data[0][1]['center'];?></td>
		<td><?php echo $data[0][2]['center'];?></td>
		<td><?php echo $data[0][3]['center'];?></td>
		<td><?php echo $data[0][4]['center'];?></td>
		<td><?php echo $data[0][5]['center'];?></td>
		<td><?php echo $data[0][6]['center'];?></td>
		<td><?php echo $data[0][7]['center'];?></td>
		<td><?php echo $data[0][8]['center'];?></td>
		<td><?php echo $data[0][9]['center'];?></td>
		<td><?php echo $data[0][10]['center'];?></td>
		<td><?php echo $data[0][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[1][0]['dynamic'];?></td>
		<td><?php echo $data[1][0]['left'];?></td>
		<td>x+y</td>
		<td><?php echo $data[1][0]['center'];?></td>
		<td><?php echo $data[1][1]['center'];?></td>
		<td><?php echo $data[1][2]['center'];?></td>
		<td><?php echo $data[1][3]['center'];?></td>
		<td><?php echo $data[1][4]['center'];?></td>
		<td><?php echo $data[1][5]['center'];?></td>
		<td><?php echo $data[1][6]['center'];?></td>
		<td><?php echo $data[1][7]['center'];?></td>
		<td><?php echo $data[1][8]['center'];?></td>
		<td><?php echo $data[1][9]['center'];?></td>
		<td><?php echo $data[1][10]['center'];?></td>
		<td><?php echo $data[1][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[2][0]['dynamic'];?></td>
		<td><?php echo $data[2][0]['left'];?></td>
		<td>dxy</td>
		<td><?php echo $data[2][0]['center'];?></td>
		<td><?php echo $data[2][1]['center'];?></td>
		<td><?php echo $data[2][2]['center'];?></td>
		<td><?php echo $data[2][3]['center'];?></td>
		<td><?php echo $data[2][4]['center'];?></td>
		<td><?php echo $data[2][5]['center'];?></td>
		<td><?php echo $data[2][6]['center'];?></td>
		<td><?php echo $data[2][7]['center'];?></td>
		<td><?php echo $data[2][8]['center'];?></td>
		<td><?php echo $data[2][9]['center'];?></td>
		<td><?php echo $data[2][10]['center'];?></td>
		<td><?php echo $data[2][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[3][0]['dynamic'];?></td>
		<td><?php echo $data[3][0]['left'];?></td>
		<td>d+x+y</td>
		<td><?php echo $data[3][0]['center'];?></td>
		<td><?php echo $data[3][1]['center'];?></td>
		<td><?php echo $data[3][2]['center'];?></td>
		<td><?php echo $data[3][3]['center'];?></td>
		<td><?php echo $data[3][4]['center'];?></td>
		<td><?php echo $data[3][5]['center'];?></td>
		<td><?php echo $data[3][6]['center'];?></td>
		<td><?php echo $data[3][7]['center'];?></td>
		<td><?php echo $data[3][8]['center'];?></td>
		<td><?php echo $data[3][9]['center'];?></td>
		<td><?php echo $data[3][10]['center'];?></td>
		<td><?php echo $data[3][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[4][0]['dynamic'];?></td>
		<td><?php echo $data[4][0]['left'];?></td>
		<td>abcd+xy</td>
		<td><?php echo $data[4][0]['center'];?></td>
		<td><?php echo $data[4][1]['center'];?></td>
		<td><?php echo $data[4][2]['center'];?></td>
		<td><?php echo $data[4][3]['center'];?></td>
		<td><?php echo $data[4][4]['center'];?></td>
		<td><?php echo $data[4][5]['center'];?></td>
		<td><?php echo $data[4][6]['center'];?></td>
		<td><?php echo $data[4][7]['center'];?></td>
		<td><?php echo $data[4][8]['center'];?></td>
		<td><?php echo $data[4][9]['center'];?></td>
		<td><?php echo $data[4][10]['center'];?></td>
		<td><?php echo $data[4][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[5][0]['dynamic'];?></td>
		<td><?php echo $data[5][0]['left'];?></td>
		<td>a+b+c+d+x+y</td>
		<td><?php echo $data[5][0]['center'];?></td>
		<td><?php echo $data[5][1]['center'];?></td>
		<td><?php echo $data[5][2]['center'];?></td>
		<td><?php echo $data[5][3]['center'];?></td>
		<td><?php echo $data[5][4]['center'];?></td>
		<td><?php echo $data[5][5]['center'];?></td>
		<td><?php echo $data[5][6]['center'];?></td>
		<td><?php echo $data[5][7]['center'];?></td>
		<td><?php echo $data[5][8]['center'];?></td>
		<td><?php echo $data[5][9]['center'];?></td>
		<td><?php echo $data[5][10]['center'];?></td>
		<td><?php echo $data[5][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[6][0]['dynamic'];?></td>
		<td><?php echo $data[6][0]['left'];?></td>
		<td>abc+dxy</td>
		<td><?php echo $data[6][0]['center'];?></td>
		<td><?php echo $data[6][1]['center'];?></td>
		<td><?php echo $data[6][2]['center'];?></td>
		<td><?php echo $data[6][3]['center'];?></td>
		<td><?php echo $data[6][4]['center'];?></td>
		<td><?php echo $data[6][5]['center'];?></td>
		<td><?php echo $data[6][6]['center'];?></td>
		<td><?php echo $data[6][7]['center'];?></td>
		<td><?php echo $data[6][8]['center'];?></td>
		<td><?php echo $data[6][9]['center'];?></td>
		<td><?php echo $data[6][10]['center'];?></td>
		<td><?php echo $data[6][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[7][0]['dynamic'];?></td>
		<td><?php echo $data[7][0]['left'];?></td>
		<td>abcdxy</td>
		<td><?php echo $data[7][0]['center'];?></td>
		<td><?php echo $data[7][1]['center'];?></td>
		<td><?php echo $data[7][2]['center'];?></td>
		<td><?php echo $data[7][3]['center'];?></td>
		<td><?php echo $data[7][4]['center'];?></td>
		<td><?php echo $data[7][5]['center'];?></td>
		<td><?php echo $data[7][6]['center'];?></td>
		<td><?php echo $data[7][7]['center'];?></td>
		<td><?php echo $data[7][8]['center'];?></td>
		<td><?php echo $data[7][9]['center'];?></td>
		<td><?php echo $data[7][10]['center'];?></td>
		<td><?php echo $data[7][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[8][0]['dynamic'];?></td>
		<td><?php echo $data[8][0]['left'];?></td>
		<td>a+b+c+d+xy</td>
		<td><?php echo $data[8][0]['center'];?></td>
		<td><?php echo $data[8][1]['center'];?></td>
		<td><?php echo $data[8][2]['center'];?></td>
		<td><?php echo $data[8][3]['center'];?></td>
		<td><?php echo $data[8][4]['center'];?></td>
		<td><?php echo $data[8][5]['center'];?></td>
		<td><?php echo $data[8][6]['center'];?></td>
		<td><?php echo $data[8][7]['center'];?></td>
		<td><?php echo $data[8][8]['center'];?></td>
		<td><?php echo $data[8][9]['center'];?></td>
		<td><?php echo $data[8][10]['center'];?></td>
		<td><?php echo $data[8][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[9][0]['dynamic'];?></td>
		<td><?php echo $data[9][0]['left'];?></td>
		<td>abcd+x+y</td>
		<td><?php echo $data[9][0]['center'];?></td>
		<td><?php echo $data[9][1]['center'];?></td>
		<td><?php echo $data[9][2]['center'];?></td>
		<td><?php echo $data[9][3]['center'];?></td>
		<td><?php echo $data[9][4]['center'];?></td>
		<td><?php echo $data[9][5]['center'];?></td>
		<td><?php echo $data[9][6]['center'];?></td>
		<td><?php echo $data[9][7]['center'];?></td>
		<td><?php echo $data[9][8]['center'];?></td>
		<td><?php echo $data[9][9]['center'];?></td>
		<td><?php echo $data[9][10]['center'];?></td>
		<td><?php echo $data[9][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[10][0]['dynamic'];?></td>
		<td><?php echo $data[10][0]['left'];?></td>
		<td>abc+d+x+y</td>
		<td><?php echo $data[10][0]['center'];?></td>
		<td><?php echo $data[10][1]['center'];?></td>
		<td><?php echo $data[10][2]['center'];?></td>
		<td><?php echo $data[10][3]['center'];?></td>
		<td><?php echo $data[10][4]['center'];?></td>
		<td><?php echo $data[10][5]['center'];?></td>
		<td><?php echo $data[10][6]['center'];?></td>
		<td><?php echo $data[10][7]['center'];?></td>
		<td><?php echo $data[10][8]['center'];?></td>
		<td><?php echo $data[10][9]['center'];?></td>
		<td><?php echo $data[10][10]['center'];?></td>
		<td><?php echo $data[10][11]['center'];?></td>
	</tr>

	<tr>
		<td><?php echo $data[11][0]['dynamic'];?></td>
		<td><?php echo $data[11][0]['left'];?></td>
		<td>a+b+c+dxy</td>
		<td><?php echo $data[11][0]['center'];?></td>
		<td><?php echo $data[11][1]['center'];?></td>
		<td><?php echo $data[11][2]['center'];?></td>
		<td><?php echo $data[11][3]['center'];?></td>
		<td><?php echo $data[11][4]['center'];?></td>
		<td><?php echo $data[11][5]['center'];?></td>
		<td><?php echo $data[11][6]['center'];?></td>
		<td><?php echo $data[11][7]['center'];?></td>
		<td><?php echo $data[11][8]['center'];?></td>
		<td><?php echo $data[11][9]['center'];?></td>
		<td><?php echo $data[11][10]['center'];?></td>
		<td><?php echo $data[11][11]['center'];?></td>
	</tr>
<?php }?>
</table>




