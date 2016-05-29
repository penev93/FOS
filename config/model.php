<?php

	/*if(isset($_GET['name']){


		$brand=$_GET['name'];

		$con=mysqli_connect("localhost","root","blackDemon","rent_a_car")or die ("Connection error: " . mysqli_connect_errno());
		$model="SELECT DISTINCT model
		FROM  cars
		WHERE brand =  'BMW'
		LIMIT 0 , 30";
		$modelQ=mysqli_query($con,$model);
		$modelArr=mysql_fetch_all($modelQ);
		foreach ($modelArr as $key => $value) {
			echo "<option value=".$value['model'].">".$value['model']."</option>";
		}
		
		mysql_close($con);

		}
		else{

		}
*/	
?>