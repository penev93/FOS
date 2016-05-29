<?php
$GLOBALS['connST']=mysqli_connect("localhost","root","blackDemon","rent_a_car");

if(file_exists("../config/queries.php")){
	include_once "../config/queries.php";

}

function mysql_fetch_all($result){

    while($row = mysqli_fetch_assoc($result)){
        $return[]=$row;
        }
        return $return;
}

	function BRAND(){
	$con=$GLOBALS['connST'];/*mysqli_connect("localhost","root","blackDemon","rent_a_car");*/
	
	$brandQ=mysqli_query($con, "SELECT DISTINCT brand FROM  cars LIMIT 0 , 15");
	$brandArr=mysql_fetch_all($brandQ);
	 	echo "<option class='placeholder' value='all'>Choose all</option>";
	foreach ($brandArr as $key => $value) {
			echo "<option name=".$value['brand']." value=".$value['brand'].">".$value['brand']."</option>";
		}
		
		mysql_close($con);
	
	}

/*FIRST----------------------PART*/
	$model_Reg=$_GET['model_reg'];
	if(isset($model_Reg)){
		echo model_regNumber();		
	}

function model_regNumber(){

	
				$brand=$_GET['brand'];
				$model=$_GET['model_reg'];
				echo $model;
				echo $brand;
	
				$con=$GLOBALS['connST'];
				$q=model_regNum_SQ($brand,$model);
				
				$regQ=mysqli_query($con,$q);
				$regArr=mysql_fetch_all($regQ);
				
				echo "<option class='placeholder' value=''>Choose number</option>";
				
				foreach ($regArr as $key => $value) {
					echo "<option name=".$value['reg_num']." value=".$value['reg_num'].">".$value['reg_num']."</option>";
				}
		
				mysql_close($con);

		}



$model_power=$_GET['model_power'];
	if(isset($model_power)){
		echo model_power();		
	}

function model_power(){

	
				$brand=$_GET['brand'];
				$model=$_GET['model_power'];
				echo $model;
				echo $brand;
	
				$con=$GLOBALS['connST'];
				$q=model_power_SQ($brand,$model);
				$powerQ=mysqli_query($con,$q);
				$powerArr=mysql_fetch_all($powerQ);
				
				echo "<option class='placeholder' value=''>Choose power</option>";
				
				foreach ($powerArr as $key => $value) {
					echo "<option name=".$value['horse_powers']." value=".$value['horse_powers'].">".$value['horse_powers']."</option>";
				}
		
				mysql_close($con);

		}

$model_color=$_GET['model_color'];
	if(isset($model_color)){
		echo model_color();		
	}

function model_color(){

	
				$brand=$_GET['brand'];
				$model=$_GET['model_color'];
				echo $model;
				echo $brand;
	
				$con=$GLOBALS['connST'];
				$q=model_color_SQ($brand,$model);

				$powerQ=mysqli_query($con,$q);
				$powerArr=mysql_fetch_all($powerQ);
				
				echo "<option class='placeholder' value=''>Choose color</option>";
				
				foreach ($powerArr as $key => $value) {
					echo "<option name=".$value['color']." value=".$value['color'].">".$value['color']."</option>";
				}
		
				mysql_close($con);

		}




$model_engine=$_GET['model_engine'];
	if(isset($model_engine)){
		echo model_engine();		
	}

function model_engine(){

	
				$brand=$_GET['brand'];
				$model=$_GET['model_engine'];
				echo $model;
				echo $brand;
	
				$con=$GLOBALS['connST'];
				$engine= model_engine_SQ($brand,$model);
				
				$engineQ=mysqli_query($con,$engine);
				$engineArr=mysql_fetch_all($engineQ);
				
				echo "<option class='placeholder' value=''>Choose engine</option>";
				
				foreach ($engineArr as $key => $value) {
					echo "<option name=".$value['engine']." value=".$value['engine'].">".$value['engine']."</option>";
				}
		
				mysql_close($con);

		}



$regNumber=$_GET['regNumber'];
if(isset($regNumber)){

	echo regNumber();
}

	function regNumber(){
			
				$brand=$_GET['regNumber'];
				$con=$GLOBALS['connST'];
				$reg= regNumSQ($brand);
				$modelQ=mysqli_query($con,$reg);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option class='placeholder' value=''>Choose number</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name=".$value['reg_num']." value=".$value['reg_num'].">".$value['reg_num']."</option>";
				}
		
				mysql_close($con);
		}


$model=$_GET['model'];
if(isset($model)){
	 echo modelSelect();
}
	function modelSelect(){
			
				$brand=$_GET['model'];
				$con=$GLOBALS['connST'];
				$model=modelSelectSQ($brand);
				$modelQ=mysqli_query($con,$model);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option class='placeholder' value=''>Choose model</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name='".$value['model']."' value='".$value['model']."'>".$value['model']."</option>";
				}
		
				mysql_close($con);
		}


		$power=$_GET['power'];
		if(isset($power)){
			 echo powerSelect();
		}
	function powerSelect(){
			
				$brand=$_GET['power'];
				$con=$GLOBALS['connST'];
				$power=powerSelectSQ($brand);
				$modelQ=mysqli_query($con,$power);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option class='placeholder' value=''>Choose power</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name=".$value['horse_powers']." value=".$value['horse_powers'].">".$value['horse_powers']."</option>";
				}
		
				mysql_close($con);
		}
		

			$color=$_GET['color'];
if(isset($color)){
	 echo colorSelect();
}
	function colorSelect(){
			
				$brand=$_GET['color'];
				$con=$GLOBALS['connST'];
				$color=colorSelectSQ($brand);
				$colorQ=mysqli_query($con,$color);
				$colorArr=mysql_fetch_all($colorQ);
				echo "<option class='placeholder' value='' >Choose color</option>";
				foreach ($colorArr as $key => $value) {
					echo "<option name=".$value['color']." value=".$value['color'].">".$value['color']."</option>";
				}
		
				mysql_close($con);
		}


	$engine=$_GET['engine'];
if(isset($engine)){
	 echo engineSelect();
}
	function engineSelect(){
			
				$brand=$_GET['engine'];
				$con=$GLOBALS['connST'];
				$engine=engineSelectSQ($brand);
				$engineQ=mysqli_query($con,$engine);
				$engineArr=mysql_fetch_all($engineQ);
				echo "<option class='placeholder' value=''>Choose engine</option>";
				foreach ($engineArr as $key => $value) {
					echo "<option name=".$value['engine']." value=".$value['engine'].">".$value['engine']."</option>";
				}
		
				mysql_close($con);
		}


/*END OF FIRST PART*/

	$reg_engine=$_GET['reg_engine'];
if(isset($reg_engine)){
	 echo reg_engine();
	 
}
	function reg_engine(){
				
				$reg_en=$_GET['reg_engine'];
				$con=$GLOBALS['connST'];
					$engine=reg_engineSQ($reg_en);
				$engineQ=mysqli_query($con,$engine);
				$engineArr=mysql_fetch_all($engineQ);
				echo "<option class='placeholder' value='' >Choose engine</option>";
				foreach ($engineArr as $key => $value) {
					echo "<option name=".$value['engine']." value=".$value['engine'].">".$value['engine']."</option>";
				}
		
				mysql_close($con);
				
		}



	$reg_color=$_GET['reg_color'];
if(isset($reg_color)){
	 echo reg_color();
}
	function reg_color(){
				
			$reg_col=$_GET['reg_color'];
				$con=$GLOBALS['connST'];
				$color=reg_colorSQ($reg_col);
				$colorQ=mysqli_query($con,$color);
				$colorArr=mysql_fetch_all($colorQ);
				echo "<option class='placeholder' value='' >Choose color</option>";
				foreach ($colorArr as $key => $value) {
					echo "<option name=".$value['color']." value=".$value['color'].">".$value['color']."</option>";
				}
		
				mysql_close($con);
		}



	$reg_power=$_GET['reg_power'];
if(isset($reg_power)){
	 echo reg_power();
}
	function reg_power(){
				
				$reg_power=$_GET['reg_power'];
				$column=$_GET['reg_model'];
				$con=$GLOBALS['connST'];
				$power=reg_powerSQ($reg_power);
				$powerQ=mysqli_query($con,$power);
				$powerArr=mysql_fetch_all($powerQ);
				echo "<option class='placeholder' value='' >Choose power</option>";
				foreach ($powerArr as $key => $value) {
					echo "<option name=".$value['horse_powers']." value=".$value['horse_powers'].">".$value['horse_powers']."</option>";
				}
		
				mysql_close($con);
		}


	$brandModel=$_GET['brandModel'];
if(isset($brandModel)){
	 echo brandModel();
}
	function brandModel(){
				
				$bm=$_GET['brandModel'];
				
				$con=$GLOBALS['connST'];
				$model=brandModelSQ($bm);
				$modelQ=mysqli_query($con,$model);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option  name='".$model."' class='placeholder' value='' >Choose model</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name=".$value['model']." value=".$value['model'].">".$value['model']."</option>";
				}
		
				mysql_close($con);
		}




	$reg_model=$_GET['reg_model'];
if(isset($reg_model)){
	 echo reg_model();
}
	function reg_model(){
				
				
				$reg_model=$_GET['reg_model'];
				$column=$_GET['reg_model'];
				$con=$GLOBALS['connST'];
				$model=reg_modelSQ($reg_model);
				$modelQ=mysqli_query($con,$model);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option  name='".$reg_model."' class='placeholder' value='' >Choose model</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name=".$value['model']." value=".$value['model'].">".$value['model']."</option>";
				}
		
				mysql_close($con);
		}

$all=$_GET['brand'];
if($all=="all"){
	 echo all();
}
	function all(){
				
			
				$reg_model=$_GET['reg_model'];
				
				$con=$GLOBALS['connST'];
				$model=allSQ($reg_model);
				$modelQ=mysqli_query($con,$model);
				$modelArr=mysql_fetch_all($modelQ);
				echo "<option  name='".$reg_model."' class='placeholder' value=' ' >Choose model</option>";
				foreach ($modelArr as $key => $value) {
					echo "<option name=".$value['model']." value=".$value['model'].">".$value['model']."</option>";
				}
		
				mysql_close($con);
		}


$masterQuery=$_GET['powerQ'];
if(isset($masterQuery)){
echo masterQuery();
				
}
function masterQuery(){
	$query="";
	$con=$GLOBALS['connST'];
	$powerQ=$_GET['powerQ'];
	$colorQ=$_GET['colorQ'];
	$engineQ=$_GET['engineQ'];
	$modelQ=$_GET['modelQ'];
	$brandQ=$_GET['brandQ'];
	$regQ=$_GET['regNumberQ'];
	$fromQ=$_GET['from'];
	$toQ=$_GET['to'];
	$isRented=$_GET['isRented'];

	$bool=false;
	$mqstring="";	

		$datetime1 = date_create($fromQ);
			$datetime2 = date_create($toQ);
			$interval = date_diff($datetime1, $datetime2);
			$diff= $interval->format('%R%a');
			if($diff<0){
						
						echo "<tr>
				<th>Incorrect date</th>
				</tr>";
				return false;
					}
	if($powerQ!=""){
		
		$mqstring.="AND c.horse_powers=".$powerQ." ";
		$bool=true;
	}
	if($colorQ!=""){
		$mqstring.="AND c.color=\"".$colorQ."\""." ";
		$bool=true;
	}
	if($engineQ!=""){
		$mqstring.="AND c.engine=\"".$engineQ."\""." ";
		$bool=true;
	}
	if($modelQ!=""){
		$mqstring.="AND c.model=\"".$modelQ."\""." ";
		$bool=true;
	}

	if($brandQ!=""){
		$mqstring.="AND c.brand=\"".$brandQ."\""." ";
		
	}
if($regQ!=""){
		$mqstring.="AND c.reg_num=\"".$regQ."\""." ";
		$bool=true;
	}

	

	if ($isRented=="rented") {
		if($brandQ=="all"){
		$query=rentedTrueSQ($fromQ,$toQ);
		}else {
		$query=rentedFalseSQ($fromQ,$toQ,$mqstring);
	}	
	}else{
			if($bool){
				if($brandQ=="all"){
				$query=brandAllTrueSQ($fromQ,$toQ);

					}else{	
					$query=brandAllFalseSQ($fromQ,$toQ,$mqstring,$brandQ);
				}
			}else{

				$query=brandAllFalseSQ($fromQ,$toQ,$mqstring,$brandQ);
			}	
		
	};

	$mQuery=mysqli_query($con,$query);
	
	
	$MQ=mysql_fetch_all($mQuery);

			echo "<tr>
				<th>Brand</th>
				<th>Model</th>
				<th>Reg. Number</th>
				<th>Power</th>
				<th>Color</th>
				<th>Engine</th>
				</tr>";
			foreach ($MQ as $key => $value) {
					echo "<tr>";
				
				if($value['brand'])echo "<td>".$value['brand']."</td>";
				if($value['model'])echo "<td>".$value['model']."</td>";
				if($value['reg_num'])echo "<td>".$value['reg_num']."</td>";
				if($value['color'])echo "<td>".$value['color']."</td>";
				if($value['engine'])echo "<td>".$value['engine']."</td>";
				if($value['horse_powers'])echo "<td>".$value['horse_powers']."</td>";
					echo "<tr>";
			}
		
	
}
?>