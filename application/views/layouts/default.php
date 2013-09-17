<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $template['title']; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link href="<?php echo base_url('public/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/css/bootstrap-responsive.css');?>" rel="stylesheet">

</head>

<body>
    <div class="navbar">
    <div class="navbar-inner">
    	<a class="brand" href="#">ProgramBrain</a>
    	<ul class="nav">
    		<li class="active"><a href="<?php echo site_url('calc/index');?>">主页面</a></li>
    	</ul>
    </div>
    </div>

	<div class="container">
		<?php echo $template['body']; ?>
	</div>

</body>


</html>