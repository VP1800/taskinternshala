<?php
function get_data($Cols, $Table) {	
	include ('dal_db.php');
	mysqli_query ($con,"set character_set_results='utf8'");   
	$select=mysqli_query($con,"select " . $Cols . " from " . $Table);
	if (!$select) {
		echo "Error: ". mysqli_error($con);
		return null;
	}
	if(mysqli_num_rows($select) > 0){
		return $select;
	}else{
		return null;
	}
}