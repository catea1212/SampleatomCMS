<?php
//Setup File: 
# Database Connection here ...
#variable for DB conneciton
#die(), if datebase can't be connected, site will not be loaded
$dbc = mysqli_connect('localhost', 'dev', '1', 'atomcms') OR die('connection failed because: '.mysqli_connect_error()); #mysql connection commando
#Constants:
define('D_TEMPLATE', 'template');
#Functions: 
include('functions/data.php'); //so function data_page ist avaiable
include ('functions/template.php'); //functions for page template

#variable,beginns with $
$site_title='AtomCMS 2.0';
// Previous $page_title='Home Page'; #later dynamic

//check first if page key in $_GET already exits
if( isset($_GET['page']))
{
	$pageID=$_GET['page']; #create a pageID to contain pageid from browser
}
else 
{
	$pageID=1; #set $pageID equal to 1 or the home page	
	
}
/*Previous
//use sqlquery to get data from database for setup the page
#previous: $q ="SELECT * from pages where id = 1"; //sql-cmd
$q ="SELECT * from pages where id = $pageID"; //sql-cmd

//sql function, result
$r =mysqli_query($dbc, $q);
//PHP arrays
$apage=mysqli_fetch_assoc($r);
#echo $apage['body'];
*/
# Page Setup
$apage=data_page($dbc, $pageID);
?>