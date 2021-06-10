<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title> Nature </title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<?php
     include './themepart/menu.php';
	 include './themepart/logo.php';
?>

<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="nature.jpg" width="900" height="400" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">Title goes here..</a></h2>
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
				  Content goes here..
				</div>
			</div>
			<div class="post">
				<div class="entry">
				</div>
			</div>
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->

<?php
    include './themepart/sidebar.php';
?>
    <!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
    include './themepart/footer.php';
?>
<!-- end #footer -->
</body>
</html>
