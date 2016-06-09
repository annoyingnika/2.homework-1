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
			echo "Please, enter the group of the prooduct!"."<br>";	//it is empty
		}else{
			echo "Group: ".$_GET["group"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as group";
		
	}
	if(isset($_GET["price"])){
		
		//only if there is price in the URL
		//echo "there is price ";
		
		//if it's empty
		if(empty($_GET["price"])){
			echo "Please, enter how much it costs!"."<br>"; //it is empty
		}else{
			echo "Price: ".$_GET["price"]."<br>"; //its not empty
		}
	}else{
		//echo "there is no such thing as price";
		
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


<?php
			$dataExists = false;
				if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
			$name = $_POST["name"];
			$Login_id = $_POST["Login_id"];
			$date = $_POST["date"];
			$genre = $_POST["genre"];
			$description = $_POST["description"];
				if($name && $Login_id && $date && $genre)
					{
			$dataExists = true;
					}
				}
?>
<a href="table.php">table</a>
<h2> Wish List </h2>

<form method="get">

	<label for="product">Product:<label><br>
	<input type="text" name="product"><br>
	
	<label for="group">Group:<label><br>
	<input type="text" name="group"><br>
	
	<label for="price">Price in EUR:<label><br>
	<input type="text" name="price"><br>
	
	
	<input type="submit" value="Add">
	
	
<form>	