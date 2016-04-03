<?php require_once("header_b.php"); ?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
      <ul class="nav navbar-nav">
	  
        <li class="active"><a href="app_b.php">Add new goal</a></li>
		
        <li><a href="table_b.php">My goals</a></li>
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	
		<h1> Goal App </h1>
		
	<form>
		<!-- TO: row-->
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="to">Add your goal:</label>
						<input name="to" id="to" type="text" class= "form-control"></input>
					</div>
				</div>
			</div>
		<!-- Deadline: row-->	
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="message">Deadline:</label>
						<input type="text" id="datepicker" class= "form-control"></input>
					</div>
				</div>
			</div>
			
			<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
</head>

</html>
		<!-- BUTTON -->	
			<div class="row">
				<div class="col-md-3">
					<input class="btn btn-info btn-lg hidden-xs" type="submit" value="Add"></input>
					<input class="btn btn-info btn-lg btn-block visible-xs-inline" type="submit" value="Add"></input>
				</div>
			</div>
	</form>		
</div>

 </body>
</html>



