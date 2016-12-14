<!DOCTYPE html>
<html>
<head>
	<?php include 'inc/link.php';?>
</head>
	<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">

	<div class="header">
		<div class="container">
		<div class="row">
			<div class="col-lg-3 header1">
				<span>header</span>
			</div>	
			<div class="col-lg-9">
				<div class="navlink">
				<ul>
					<li><a href="#">header1</a></li>
					<li><a href="#">header1</a></li>
					<li><a href="#">header1</a></li>
					<li><a href="#">header1</a></li>
				</ul>
			</div>
			</div>		
		</div> 		
		</div>
		</div>
		<div class="maincontainer">
		<div class="container">
			<div class="row">
				<div class="sidebar">
					<div class="col-lg-3">
						
					</div>
					<div class="col-lg-9">
						
					</div>
				</div>
		</div>
		</div>
	</div>
			<!--main container = sidebar + leftbar  starts-->
			<div class="container">
			<div class="row">
			<nav class="col-sm-2" id="myScrollspy">
			  <ul class="nav nav-pills nav-stacked">
			    <li class="active"><a href="#section1">Navbar</a></li>
			    <li><a href="#section2">Button</a></li>
			    <li><a href="#section3">Section 3</a></li>
			    <li><a href="#section4">Section 4</a></li>
			    <li><a href="#section5">Section 5</a></li>
			    <li><a href="#section6">Section 6</a></li>
			    <li class="dropdown">
			      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
			      <ul class="dropdown-menu">
			        <li><a href="#section41">Section 4-1</a></li>
			        <li><a href="#section42">Section 4-2</a></li>                     
			      </ul>
			    </li>
			  </ul>
			</nav>
			<div class="col-sm-10">
			<?php include 'inc/fields/navbar.php';?>
			<?php include 'inc/fields/button.php'; ?>   
			<?php include 'inc/fields/label.php';?> 
			<?php include 'inc/fields/form.php'; ?>
			<?php include 'inc/fields/dialogbox.php'; ?>
			<?php include 'inc/fields/table.php'; ?>
 
			  <div id="section42">         
			    <h1>Section 4-2</h1>
			    <p>Try to scroll this section and look at the navigation list while scrolling!</p>
			  </div>
			</div>
			</div>
			</div>
			<!--main container = sidebar + leftbar  ends-->
			</body>
</html>