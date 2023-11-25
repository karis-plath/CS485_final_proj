
<!DOCTYPE html>
<html lang="en">
<head style = "margin-top:0px;">

<meta charset="utf-8">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />


</head>
<body>
        
	  <?php
include ("menu.php")?>

		<div class="container">
			<div
				class="mask justify-content-center flex-column text-center"
				style="background-color: hsla(0, 0%, 98%, 0.6)">



				<!-- search -->
				<div class="row">
				<form method=POST>
				<div class="col input-group flex-column content-justify-center centered">
					<input type="text" class="form-control input-lg" name="searchBox"
						placeholder="Search For Plant">
					<div class="input-group-addon">
						<button class="btn btn-secondary" id="search_icon" type="button submit">
							<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
								fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path
									d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
</svg>
						</button>
						</div>
						</div>
						
					</form>
						</div>
	
						
						<div class="row dropdown">  
							<div class="input-group-addon">
 						 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   							 Filter
  						</button>
  						
 						<div class="col">
 						<p> Stem </p>
 					<p> Color </p>
  						 <input type="checkbox" id="color_brown" name="color_brown" value="color_brown">
  						<label for="color_brown"> Brown </label><br>
 						<input type="checkbox" id="color_green" name="color_green" value="color_green">
  						<label for="color_green"> Green </label><br>
  						<input type="checkbox" id="color_red" name="color_red" value="color_red">
  						<label for="color_red"> Red </label><br><br>
  						</div>
  					<div class="col">
  						 <p> type </p>
  						 <input type="checkbox" id="color_brown" name="color_brown" value="color_brown">
  						<label for="color_brown"> Smooth </label><br>
 						<input type="checkbox" id="color_green" name="color_green" value="color_green">
  						<label for="color_green"> Hairy </label><br>
  						<input type="checkbox" id="color_red" name="color_red" value="color_red">
  						<label for="color_red"> Course </label><br><br>
  						</div>
  						</div>
					</div>
					</div>
					
						<p id="data"></p>
						</div> 
					
						
				
					<script>
					
//                 $("form").submit(
//                     function(e){
//                         // prevent jQuery refresh the whole page after appending the new element. See the following page for more detail
//                         // https://stackoverflow.com/questions/31357050/jquerypage-refreshes-after-appending-html-with-html
//                         e.preventDefault();
                        
//                         $.post("search.php", $(this).serialize(),
//                             function(data){ // callback function
//                                 $("#data").html(data);
//                             }, 
//                         );
//                     }
//                 );
            </script>
				
	
</body>
<?php

?>
</html>
