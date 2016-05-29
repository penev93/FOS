
<?php
if(file_exists("../config/searchDetails.php")){
	include_once "../config/searchDetails.php";
}
if(file_exists("../config/queries.php")){
	include_once "../config/queries.php";
}
$conn=$connST;

?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html" charset='utf-8'></meta>
<link rel='stylesheet' href='../css/index.css'/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script src="../javascript/functions.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"></link>
</head>

<body>
<div class='firstH'>
	<nav class='navigation'>
		<ul>
			<li><a href='index.php?page=home'>Home</a></li>
			<li><a href='index.php?page=faq'>FAQ</a></li>
			<li><a href='index.php?page=about'>About</a></li>
			<li><a  class='x' href='index.php?page=contacts'>Contacts</a></li>
		</ul>
	</nav>
	<aside class='search'>
	<h1>Search car</h1>
	</aside>
</div>
<div class='content'>
<div id='RES'></div>
	<form name='searchCar' action='' id='Search' method="GET">
		<table class='searchCar'>
			<tr>
				<td class='bstyle'><span class='label'>Brand</span></td>
				<td class='bstyle'><span class='label'>Model</span></td>
			</tr>
			<tr>
				<td>
					<select id="brand">
					<?php echo BRAND();?>
					</select>
				</td>
				<td>
					<select id="model">
					<option class='placeholder' value="" disabled selected>Choose model</option>
					</select>
				</td>
			</tr>
					<tr>
				<td  class='bstyle'><span class='label'>Registration Number</span></td>
				<td  class='bstyle'><span class='label'>Power</span></td>
			</tr>
			<tr>
				<td>
					<select id='regNumber'>
					<option  class='placeholder' value="" disabled selected>Choose number</option>
					</select>
				</td>
				<td>
					<select id='power'>
					<option class='placeholder' value="" disabled selected>Choose power</option>
					</select>
				</td>
			</tr>
					<tr>
				<td  class='bstyle'><span class='label'>Color</span></td>
				<td  class='bstyle'><span class='label'>Engine</span></td>
			</tr>
			<tr>
				<td>
					<select id='color'>
					<option  class='placeholder' value="" disabled selected>Choose color</option>					
					</select>
				</td>
				<td>
					<select id='engine'>
					<option class='placeholder' value="" disabled selected>Choose engine</option>
					</select>
				</td>
			</tr>
			</tr>
					<tr>
				<td class='bstyle'><span class='label'>From</span></td>
				<td class='bstyle'><span class='label'>To</span></td>
			</tr>
			<tr>
				<td>
				<img src='../imgs/date.gif' name='Date :' /><input type="text" name='dateFrom' id="From" class="datepicker"/>
				</td>
				<td>
				<img src='../imgs/date.gif' name='Date :' /><input type="text" name='dateTo' id="To" class="datepicker"/>
				</td>
			</tr>
			<tr>
				<td  class='last'>
				<input type='radio' checked name='rent' value='rent'>Rent</td>
				</td>
				<td  class='last'>
				<input type='radio' name='rent' value='rented'>Rented</td>
				</td>
			</tr>
			<tr>	
					<td colspan='2'><input type='submit' name='submitButton' class='subButt' value='Search'/></td>
				
			</tr>
		</table>
	</form>
	<div class='result'>
		<h2>Result</h2>
		<table class='resultTable'>
			<tr>
				<th>Brand</th>
				<th>Model</th>
				<th>Reg. Number</th>
				<th>Power</th>
				<th>Color</th>
				<th>Engine</th>
			</tr>
		</table>
	</div>
</div>
<footer>
</footer>
</body>
</html>


