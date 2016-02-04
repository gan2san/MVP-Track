<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Track</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="css/bootstrap-switch.min.css">
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-switch.min.js"></script>
	<script>
		$( document ).ready(function() {
		 	$(".switch").bootstrapSwitch();
		});
	</script>
</head>
<body>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Logo</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">... <span class="sr-only">(current)</span></a></li>
	        <li><a href="inbox.php">Track</a></li>
	        <li><a href="#">Reports</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          	<li><a href="#">Overview</a></li>
				<li><a href="#">Account Settings</a></li>
				<li><a href="#">People and Permissions</a></li>
				<li><a href="#">Directory</a></li>
				<li><a href="#">Integrations</a></li>
				<li><a href="#">Documents</a></li>
				<li><a href="#">Contact Center</a></li>
				<li><a href="#">Architect</a></li>
				<li><a href="#">Outbound Dialing</a></li>
				<li><a href="#">Quality</a></li>
				<li><a href="#">Scripts</a></li>
				<li><a href="#">Telephony</a></li>
				<li><a href="company.php">Track</a></li>
	          </ul>
	        </li>
	      </ul>
	      <!-- <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form> -->
	      <!-- <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	      </ul> -->
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</header>
<div class="action-sidebar">
	<a href="#"><i class="glyphicon glyphicon-star"></i></a>
	<a href="#"><i class="glyphicon glyphicon-comment"></i></a>
	<a href="#"><i class="glyphicon glyphicon-facetime-video"></i></a>
	<a href="#"><i>...</i></a>
</div>