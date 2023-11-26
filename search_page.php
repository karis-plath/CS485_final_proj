
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
	
						<div class="container"> 
						
						<div class="row">  
							<div class="dropdown">
 						 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   							 Filter
  						</button>
  						
 						<div class="col">
 						
 					<p> Stem Color </p>
  						 <input type="radio" id="color_brown" name="color_brown" value="color_brown">
  						<label for="color_brown"> Brown </label><br>
 						<input type="radio" id="color_green" name="color_green" value="color_green">
  						<label for="color_green"> Green </label><br>
  						<input type="radio" id="color_red" name="color_red" value="color_red">
  						<label for="color_red"> Red </label><br><br>
  						</div>
  					<div class="col">
  						 <p> Stem Type </p>
  						<input type="radio" id="color_brown" name="color_brown" value="color_brown">
  						<label for="color_brown"> Smooth </label><br>
 						<input type="radio" id="color_green" name="color_green" value="color_green">
  						<label for="color_green"> Hairy </label><br>
  						<input type="radio" id="color_red" name="color_red" value="color_red">
  						<label for="color_red"> Course </label><br><br>
  						<input type="radio" id="thorned" name="thorned" value="thorned">
						<label for="thorned"> Thorned </label><br>
						<input type="radio" id="shag" name="shag" value="shag">
						<label for="shag"> Shag </label><br>
  						</div>
  						<div class="col">
  						<p> Stem Shape </p>
  						<input type="radio" id="branching" name="branching" value="branching">
						<label for="branching"> Branching </label><br>
						<input type="radio" id="single" name="single" value="signle">
						<label for="single"> Single </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Edges </p>
  						<input type="radio" id="leaf_toothed" name="leaf_toothed" value="leaf_toothed">
						<label for="leaf_toothed"> Toothed </label><br>
						<input type="radio" id="leaf_smooth" name="leaf_smooth" value="leaf_smooth">
						<label for="leaf_smooth"> Smooth </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Texture </p>
  						<input type="radio" id="smooth" name="smooth" value="smooth">
						<label for="smooth"> Smooth </label><br>
						<input type="radio" id="hairy" name="hairy" value="hairy">
						<label for="hairy"> Hairy </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Shape </p>
  						<input type="radio" id="leaf_elipse" name="leaf_elipse" value="leaf_elipse">
						<label for="leaf_elipse"> Elipse </label><br>
						<input type="radio" id="leaf_lobed" name="leaf_lobed" value="leaf_lobed">
						<label for="leaf_lobed"> Lobed </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Type </p>
  						<input type="radio" id="leaf_compound" name="leaf_compound" value="leaf_compound">
						<label for="leaf_compound"> Compound </label><br>
						<input type="radio" id="leaf_simple" name="leaf_simple" value="leaf_simple">
						<label for="leaf_simple"> Simple </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Flower Color </p>
  						<input type="radio" id="flower_white" name="flower_white" value="flower_white">
						<label for="flower_white"> White </label><br>
						<input type="radio" id="flower_green" name="flower_green" value="flower_green">
						<label for="flower_green"> Green </label><br>
						<input type="radio" id="flower_yellow" name="flower_yellow" value="flower_yellow">
						<label for="flower_yellow"> Yellow </label><br>
						<input type="radio" id="flower_orange" name="flower_orange" value="flower_orange">
						<label for="flower_orange"> Orange </label><br>
						<input type="radio" id="flower_red" name="flower_red" value="flower_red">
						<label for="flower_red"> Red </label><br>
						<input type="radio" id="flower_blue" name="flower_blue" value="flower_blue">
						<label for="flower_blue"> Blue </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Color </p>
  						<input type="radio" id="fruit_white" name="fruit_white" value="fruit_white">
						<label for="fruit_white"> White </label><br>
						<input type="radio" id="fruit_green" name="fruit_green" value="fruit_green">
						<label for="fruit_green"> Green </label><br>
						<input type="radio" id="fruit_purple" name="fruit_purple" value="fruit_purple">
						<label for="fruit_purple"> Purple </label><br>
						<input type="radio" id="fruit_brown" name="fruit_brown" value="fruit_brown">
						<label for="fruit_brown"> Brown </label><br>
						<input type="radio" id="fruit_yellow" name="fruit_yellow" value="fruit_yellow">
						<label for="fruit_yellow"> Yellow </label><br>
						<input type="radio" id="fruit_black" name="fruit_black" value="fruit_black">
						<label for="fruit_black"> Black </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Edible </p>
  						<input type="radio" id="fruit_yes" name="fruit_yes" value="fruit_yes">
						<label for="fruit_yes"> Yes </label><br>
						<input type="radio" id="fruit_no" name="fruit_no" value="fruit_no">
						<label for="fruit_no"> No </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Season </p>
  						<input type="radio" id="fruit_april" name="fruit_april" value="fruit_april">
						<label for="fruit_april"> April </label><br>
  						<input type="radio" id="fruit_may" name="fruit_may" value="fruit_may">
						<label for="fruit_may"> May </label><br>
  						<input type="radio" id="fruit_june" name="fruit_june" value="fruit_june">
						<label for="fruit_june"> June </label><br>
						<input type="radio" id="fruit_july" name="fruit_july" value="fruit_july">
						<label for="fruit_july"> July </label><br>
						<input type="radio" id="fruit_august" name="fruit_august" value="fruit_august">
						<label for="fruit_august"> August </label><br>
						<input type="radio" id="fruit_october" name="fruit_october" value="fruit_october">
						<label for="fruit_october"> October </label><br>
  						</div>
  						
  						</div>
  						
					</div>
					
					</div>
					</div>
					</div> 
					<div class="container"> 
					<p class="mask" style="background-color: white" id="data">
					</p>
					</div>
				  <script>
                $("form").submit(
                    function(e){
                        // prevent jQuery refresh the whole page after appending the new element. See the following page for more detail
                        // https://stackoverflow.com/questions/31357050/jquerypage-refreshes-after-appending-html-with-html
                        e.preventDefault();
                        
                        $.post("search.php", $(this).serialize(),
                            function(data){ // callback function
                                $("#data").html(data);
                            }, 
                        );
                    }
                );
            </script>
</body>
<?php

?>
</html>
