<html>
<body>

<?php

class JSONData{
	  public $jsonArray;
	  public $option;
	  public $url;

	  public function __construct($url){
		$this->url = $url;
		$jsonFile = file_get_contents($this->url);
		$this->jsonArray = json_decode($jsonFile,TRUE);
		//$this->option = array();
		
		for($i=0; $i<count($this->jsonArray['menu_items']); $i++){
			$this->option[$i]=$this->jsonArray['menu_items'][$i]['name'];
		 }
	  
		
	  }
	  public function getVals(){
		
		
		print("<div>");
		print("<div><label for='menu' style='font-size:120%;color:blck;'></label>
			<select id='menu' name='menu' onchange='this.form.submit();' style='background-color:#e0ccdd;width:30%;'>
			<option selected disabled>Select Food</option>");	
			foreach($this->option as $item){
				print("<option value='$item'>$item</option>");
			}
			//var_dump($this->option);
			print("</select></div>");
			//print_r($this->option);
			print("</div>");
	  }
	  //
	  public function completeData(){
		  return $this->jsonArray;
	  }
    }
    
?>
</body>
</html>
