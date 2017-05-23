<?php
/* Title : Ajax Pagination with jQuery & PHP
Example URL : http://www.sanwebe.com/2013/03/ajax-pagination-with-jquery-php */

//continue only if $_POST is set and it is a Ajax request
if(isset($_POST) && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

	include("config.inc.php");  //include config file
	//Get page number from Ajax POST
	if(isset($_POST["page"])){
		$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH); //filter number
		if(!is_numeric($page_number)){die('Invalid page number!');} //incase of invalid page number
	}else{
		$page_number = 1; //if there's no page number, set it to 1
	}

	//get total number of records from database for pagination
	$results = $mysqli->query("SELECT COUNT(*) FROM dmn_actipromo");
	$get_total_rows = $results->fetch_row(); //hold total records in variable
	//break records into pages
	$total_pages = ceil($get_total_rows[0]/$item_per_page);

	//get starting position to fetch the records
	$page_position = (($page_number-1) * $item_per_page);

	//ส่วนของการดึงข้อมูล ตามจำนวน $item_per_page ใน Config
	$results = $mysqli->prepare("SELECT actipromo_type,actipromo_id, actipromo_image, actipromo_name, actipromo_subtitle , actipromo_date FROM dmn_actipromo ORDER BY actipromo_id DESC LIMIT $page_position, $item_per_page");
	$results->execute();
	$results->bind_result($actipromo_type, $actipromo_id, $actipromo_image, $actipromo_name, $actipromo_subtitle, $actipromo_date); //bind variables to prepared statement


	//ตั้งลิ้งสด 555
	//Localhost
 //$BASE_IMG = "http://localhost/diamondnumber/images/actipromo/";
	// $SITE_URL = "http://localhost/diamondnumber/news/detail/";

	//OnWeb
	$BASE_IMG = "http://www.number-energy.com/images/actipromo/";
	$SITE_URL = "http://www.number-energy.com/news/detail/";

 	//ส่วนของ Views
	while($results->fetch()){
		echo "<div class='row panel wow slideInRight'>";
		echo "<div class='col-lg-5 col-sm-12'>";
		echo "<a href='$SITE_URL$actipromo_id'>";
		echo "<img src='$BASE_IMG$actipromo_image' style='width:100%; height:200px;'>";
		echo "</a>";
		echo "</div>";
		echo "<div class='col-lg-7 col-sm-12'>";
		echo "<div><a href='$SITE_URL$actipromo_id'>";
		if ($actipromo_type == 1) {
			echo " <h4>[กิจกรรม] $actipromo_name</a></h4></div>";
		} else {
			echo " <h4>[โปรโมชั่น] $actipromo_name</a></h4></div>";
		}
		echo "<div>$actipromo_subtitle</div>";
		echo "<div><a href='$SITE_URL$actipromo_id'>อ่านเพิ่ม...</a></div><hr>";
		echo "<div>เมื่อวันที่ : <span style='color:red;'>$actipromo_date</span></div>";
		echo "</div>";
		echo "</div>";
		echo "<hr>";
	}

	echo '<div align="center">';
	/* We call the pagination function here to generate Pagination link for us.
	As you can see I have passed several parameters to the function. */
	echo paginate_function($item_per_page, $page_number, $get_total_rows[0], $total_pages);
	echo '</div>';

	exit;
}
################ pagination function #########################################
function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
{
    $pagination = '';
    if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
        $pagination .= '<ul class="pagination">';

        $right_links    = $current_page + 3;
        $previous       = $current_page - 3; //previous link
        $next           = $current_page + 1; //next link
        $first_link     = true; //boolean var to decide our first link

        if($current_page > 1){
			$previous_link = ($previous==0)? 1: $previous;
            $pagination .= '<p class="first"><a href="#" data-page="1" title="First">&laquo;</a></p>'; //first link
            $pagination .= '<p><a href="#" data-page="'.$previous_link.'" title="Previous">&lt;</a></p>'; //previous link
                for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
                    if($i > 0){
                        $pagination .= '<p><a href="#" data-page="'.$i.'" title="Page'.$i.'">'.$i.'</a></p>';
                    }
                }
            $first_link = false; //set first link to false
        }

        if($first_link){ //if current active page is first link
            $pagination .= '<p class="first active">'.$current_page.'</p>';
        }elseif($current_page == $total_pages){ //if it's the last active link
            $pagination .= '<p class="last active">'.$current_page.'</p>';
        }else{ //regular current link
            $pagination .= '<p class="active">'.$current_page.'</p>';
        }

        for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
            if($i<=$total_pages){
                $pagination .= '<p><a href="#" data-page="'.$i.'" title="Page '.$i.'">'.$i.'</a></p>';
            }
        }
        if($current_page < $total_pages){
				$next_link = ($i > $total_pages) ? $total_pages : $i;
                $pagination .= '<p><a href="#" data-page="'.$next_link.'" title="Next">&gt;</a></p>'; //next link
                $pagination .= '<p class="last"><a href="#" data-page="'.$total_pages.'" title="Last">&raquo;</a></p>'; //last link
        }

        $pagination .= '</ul>';
    }
    return $pagination; //return pagination links
}

?>
