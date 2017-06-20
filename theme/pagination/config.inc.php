<?php
/* Title : Ajax Pagination with jQuery & PHP
Example URL : http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php */

// localhost
$db_username 		= 'root'; //database username
$db_password 		= ''; //dataabse password
$db_name 			= 'diamondnumber'; //database name
$db_host 			= 'localhost'; //hostname or IP

// // onweb
// $db_username 		= 'admin_dmn'; //database username
// $db_password 		= '1q2w3e4r5t'; //dataabse password
// $db_name 			= 'admin_dmn'; //database name
// $db_host 			= 'localhost'; //hostname or IP


$item_per_page 		= 4; //item to display per page

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
mysqli_set_charset($mysqli, "utf8");

?>
