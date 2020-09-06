<?php
    
if ($_GET['dropdownValue']){
    //call the function or execute the code
    $val_select=$_GET['dropdownValue'];
	//echo "<br/><br/><br/><br/><br/>Selected value in php ".$selected;
   require 'show_data.php';
   $url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new JSONData($url);
	//$show->getVals();
	$jsonArr = $show->completeData();
	$option=$show->option;
	$key=array_search($val_select,$option);
	$details = $jsonArr['menu_items'][$key];

	
	$id = $details['id'];
	$short_name = $details['short_name'];
	$name = $details['name'];
	$description = $details['description'];
	$price_small = $details['price_small'];
	$price_large = $details['price_large'];
	$small_portion_name = $details['small_portion_name'];
	$large_portion_name = $details['large_portion_name'];
	
	print("<center><br><br><div style='font-family:Times New Roman;
												font-size:100%;
												color:black;
												width:500px;
												text-align:left;
												background-color:#D9B08C;
												display:block;
												
												'>");
												
	 print("<b>ID : </b>$id<br>
	 	<b>Short Name : </b>$short_name<br>
	 	<b>Name : </b>$name<br>
	 	<b>Description : </b>$description<br>
	 	<b>Price_Small : </b>$price_small<br>
	 	<b>Price_Large : </b>$price_large<br>
	 	<b>Small Portion Name : </b>$small_portion_name<br>
	 	<b>Large Portion Name : </b>$large_portion_name");
	print("</div></center>");
	
	
}

?>