<?php require_once("header.php"); ?>



<?php
	//require another php file
	// ../../../ means > 3 folders back
	require_once("../../config.php");
	
	$everything_was_okay = true;

	
	//*************************************
	//check if there is variable in the URL
	//*************************************
	
	
	if(isset($_GET["product"])) {
		
		//only if there is product in the URL
		//echo "there is product ";
		
		//if it's empty
		if(empty($_GET["product"])){
			$everything_was_okay = false;
			echo "Please, enter the product"."<br>"; //it is empty
		}else{
			echo "Product: ".$_GET["product"]."<br>"; //its not empty
		}
	}else{
		echo "There is no such thing as product";
		
	}
	
		if(isset($_GET["group"])) {
		
		//only if there is group in the URL
		//echo "there is group ";
		
		//if it's empty
		if(empty($_GET["group"])){
			$everything_was_okay = false;
			echo "Please, enter the group of the product!"."<br>";	//it is empty
		}else{
			echo "Group: ".$_GET["group"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as group";
		
	}
	if(isset($_GET["price"])){
		
		//only if there is message in the URL
		//echo "there is message ";
		
		//if it's empty
		if(empty($_GET["price"])){
			$everything_was_okay = false;
			echo "Please, enter how much it costs!"."<br>"; //it is empty
		}else{
			echo "Price: ".$_GET["price"]."<br>"; //its not empty
		}
	}else{
		echo "there is no such thing as price";
		
	}
	


// ? was everthing okay
	if($everything_was_okay == true){
		
		echo "Saving ...";
		
		//connection with the username and password
		//access username from config
		
		//echo $db_username;
		
		
		
		//1 servername
		//2 username
		//3 password
		//4 database
		$mysql = new mysqli("localhost", $db_username, $db_password, "webpr2016_nicole");
		
		$stmt = $mysql->prepare("INSERT INTO exam1 (start_location, destination, price) VALUES(?,?,?)");
		
		//echo error
		echo $mysql->error;
		
		// we are replacing question marks with values
		// s -string, date or smth that is based on characters and numbers.
		// i - integer, number
		// d - decimal, floatval
		
		// for each question mark its type with one letter
		$stmt->bind_param("sss", $_GET["product"], $_GET["group"], $_GET["price"]);
		
		//save
		if($stmt->execute()){
			echo "saved sucessfully";
		}else{
			echo $stmt->error;
		}
		
	}
?>


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
	  
        <li class="active"><a href="app_b.php">Wish List</a></li>
		
        <li><a href="table_b.php">Table</a></li>
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
	
		<h1> Enter your wish</h1>
		
	<form>
		<!-- Product: row-->
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="product">Product:</label>
						<input name="product" id="product" type="text" class= "form-control"></input>
					</div>
				</div>
			</div>
		<!-- Group: row-->	
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="group">Group:</label>
						<input name="group" id="group" type="text" class= "form-control"></input>
					</div>
				</div>
			</div>
			<!-- Price: row-->	
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="price">Price:</label>
						<input name="price" id="price" type="text" class= "form-control"></input>
					</div>
				</div>
			</div>
		<!-- BUTTON -->	
			<div class="row">
				<div class="col-md-3">
					<input class="btn btn-info btn-lg hidden-xs" type="submit" value="Save"></input>
					<input class="btn btn-info btn-lg btn-block visible-xs-inline" type="submit" value="Save"></input>
				</div>
			</div>
	</form>		
</div>

 </body>
</html>