<?php
function model_regNum_SQ($brand,$model){
	$q="SELECT DISTINCT reg_num
				FROM  cars
				WHERE brand =  '$brand' AND model= '$model'
				LIMIT 0 , 30";
				return $q;
}

		function model_power_SQ($brand,$model){
			$q="SELECT DISTINCT horse_powers
						FROM  cars
						WHERE brand =  '$brand' AND model= '$model'
						LIMIT 0 , 30";
						return $q;
		}

		function model_color_SQ($brand,$model){
			$q="SELECT DISTINCT color
				FROM  cars
				WHERE brand =  '$brand' AND model= '$model'
				LIMIT 0 , 30";
				return $q;
		}


		function model_engine_SQ($brand,$model){
			$engine="SELECT DISTINCT engine
				FROM  cars
				WHERE brand =  '$brand' AND model= '$model'
				LIMIT 0 , 30";
				return $engine;
		}

		function regNumSQ($brand){
			$reg="SELECT DISTINCT reg_num
				FROM  cars
				WHERE brand =  '$brand'
				LIMIT 0 , 30";
				return $reg;
		}

		function modelSelectSQ($brand){
			$model="SELECT DISTINCT model
				FROM  cars
				WHERE brand =  '$brand'
				LIMIT 0 , 30";
				return $model;
		}

		function powerSelectSQ($brand){
			$power="SELECT DISTINCT horse_powers
				FROM  cars
				WHERE brand =  '$brand'
				LIMIT 0 , 30";
				return $power;
		}
		function colorSelectSQ($brand){
			$color="SELECT DISTINCT color
				FROM  cars
				WHERE brand =  '$brand'
				LIMIT 0 , 30";	
				return $color;
		}

		function engineSelectSQ($brand){
			$engine="SELECT DISTINCT engine
				FROM  cars
				WHERE brand =  '$brand'
				LIMIT 0 , 30";
				return $engine;
		}
		function reg_engineSQ($reg_en){
			$engine="SELECT DISTINCT engine
				FROM  cars
				WHERE reg_num =  '$reg_en'
				LIMIT 0 , 30";
				return $engine;
		}

		function reg_colorSQ($reg_col){
			$color="SELECT DISTINCT color
				FROM cars
				WHERE reg_num =  '$reg_col'
				LIMIT 0 , 30";
				return $color;
		}

		function reg_powerSQ($reg_power){
			$power="SELECT DISTINCT horse_powers
				FROM  cars
				WHERE reg_num =  '$reg_power'
				LIMIT 0 , 30";
				return $power;
		}
		function brandModelSQ($bm){
			$model="SELECT DISTINCT model
				FROM  cars
				WHERE brand = '$bm'
				LIMIT 0 , 30";
				return $model;
		}

		function reg_modelSQ($reg_model){
			$model="SELECT DISTINCT model
				FROM  cars
				WHERE reg_num = '$reg_model'
				LIMIT 0 , 30";
				return $model;
		}
		function allSQ($reg_model){
			$model="SELECT DISTINCT model
				FROM  cars
				WHERE reg_num = '$reg_model'
				LIMIT 0 , 30";
				return $model;
		}

		function rentedTrueSQ($fromQ,$toQ){
			$query="SELECT DISTINCT c.brand, c.model, c.reg_num, c.horse_powers, c.color, c.engine
		FROM cars c
		INNER JOIN clients_cars cl ON c.id_car=cl.cars_id
		WHERE date('$fromQ') BETWEEN date(cl.rent_date) AND date(cl.return_date)  OR date('$toQ') BETWEEN date(cl.rent_date) 
		AND date(cl.return_date) OR date('$fromQ') < date(cl.rent_date) AND date('$toQ') > date(cl.return_date)  LIMIT 0,7";
			return $query;
		}

		function rentedFalseSQ($fromQ,$toQ,$mqstring){
			$query="SELECT DISTINCT c.brand, c.model, c.reg_num, c.horse_powers, c.color, c.engine
		FROM cars c
		INNER JOIN clients_cars cl ON c.id_car=cl.cars_id
		WHERE date('$fromQ') BETWEEN date(cl.rent_date) AND date(cl.return_date)  OR date('$toQ') BETWEEN date(cl.rent_date) 
		AND date(cl.return_date) OR date('$fromQ') < date(cl.rent_date) AND date('$toQ') > date(cl.return_date) ".$mqstring." LIMIT 0,7";
		return $query;
		}

		function brandAllTrueSQ($fromQ,$toQ){
				$query="SELECT DISTINCT c.brand, c.model, c.reg_num, c.horse_powers, c.color, c.engine
				FROM cars c
				LEFT JOIN clients_cars cl ON c.id_car = cl.cars_id
				WHERE DATE(  '$toQ' ) < DATE( cl.rent_date ) 
				OR DATE( '$fromQ') > DATE( cl.return_date ) OR DATE( cl.rent_date ) IS NULL LIMIT 0,7";	
				return $query;
		}

		function brandAllFalseSQ($fromQ,$toQ,$mqstring,$brandQ){
				$query="SELECT DISTINCT c.brand, c.model, c.reg_num, c.horse_powers, c.color, c.engine
					FROM cars c
					LEFT JOIN clients_cars cl ON c.id_car = cl.cars_id
					WHERE 
					 c.brand =  \"".$brandQ."\""." ".$mqstring."
					AND (
					DATE( cl.rent_date ) IS NULL 
					OR cl.return_date <= DATE(  '$fromQ' ) 
					AND cl.rent_date <= DATE(  '$toQ' )
					)
					LIMIT 0 , 7";

						return $query;

		}
			function boolFalse($fromQ,$toQ,$mqstring){
				$query="SELECT DISTINCT c.brand, c.model, c.reg_num, c.horse_powers, c.color, c.engine
				FROM cars c
				LEFT JOIN clients_cars cl ON c.id_car = cl.cars_id
				WHERE DATE(cl.rent_date) IS NULL 
				".$mqstring." "." ". " 
				OR cl.return_date <= DATE(  '$fromQ' ) 
				AND cl.rent_date <= DATE(  '$toQ' ) 
				LIMIT 0 , 30";
				return $query;
			}
?>	