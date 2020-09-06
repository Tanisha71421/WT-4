<!DOCTYPE html>
<html>
    <head>
       <title>Tani's Restaurant</title>
	   <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

		<link rel="stylesheet" href="styles.css">
		<link rel="icon" type="image/jpg" href="https://images.vexels.com/media/users/3/135263/isolated/preview/b26ee4099ae2550f79e65e41843a9198-web-home-flat-sign-by-vexels.png"/>
		<script
			src="https://code.jquery.com/jquery-3.5.1.js"
			integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
			crossorigin="anonymous">
		</script>

	</head>
<body>
	<nav class="navbar navbar-#e0ccdd bg-#e0ccdd">
      <a class="navbar-brand" href="https://tanisha7147.000webhostapp.com//">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcStY1526KcCaDt0AkXiVnmnyndlHAUA5T1oug&usqp=CAU" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy" >
        <b><i> Menu </i></b> 
      </a>
<center>
	<h1> Welcome To Tani's Restaurant </h1>
	<h2><i>Select any one option for details </i></h2>
<br><br>	
<div id="div1">
    <?php
	require 'show_data.php';
	$url = "https://davids-restaurant.herokuapp.com/menu_items.json";
	$show = new JSONData($url);
	$show->getVals();
	?>
</div>
 <div id="d"></div>
 </center>
 <script type="text/javascript" defer="true">
		
            $(document).ready(function(){
				
            $('#menu').change(function(){
                
                var inputValue = $(this).val();
                
				
					
                $.get('submit.php', { dropdownValue: inputValue }, function(data){
                    alert('Click to view details');
					
					
					$('#d').html(data);
					
                    
                });
				
            });
        });
		
</script>
	

<div id="div2">
</div>


	
</body>
</html>