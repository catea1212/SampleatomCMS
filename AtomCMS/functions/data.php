<?php 
//use a function to get data from sql 
function data_page($dbc, $id)
{
	//use sqlquery to get data from database for setup the page
	#previous: $q ="SELECT * from pages where id = 1"; //sql-cmd
	$q ="SELECT * from pages where id = $id"; //sql-cmd
	
	//sql function, result
	$r =mysqli_query($dbc, $q);
	//PHP arrays
	$data=mysqli_fetch_assoc($r);
	#echo $apage['body'];
	return $data;
}
?>