
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
	<form method=POST>
						<div class="container"> 
						
						<div class="row">  
							<div class="dropdown">
 						 <button class="btn btn-secondary dropdown-toggle" type="button submit" id="dropdownMenuButton" name="filter" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   							 Filter
  						</button>
  						
 						<div class="col">
 						
 					<p> Stem Color </p>
  						 <input type="radio" id="brown" name="stem_colors[]" value="brown">
  						<label for="brown"> Brown </label><br>
 						<input type="radio" id="color_green" name="stem_colors[]" value="green">
  						<label for="green"> Green </label><br>
  						<input type="radio" id="red" name="stem_colors[]" value="red">
  						<label for="red"> Red </label><br><br>
  						</div>
  					<div class="col">
  						 <p> Stem Texture </p>
  						<input type="radio" id="smooth" name="stem_texture[]" value="smooth">
  						<label for="smooth"> Smooth </label><br>
 						<input type="radio" id="hairy" name="stem_texture[]" value="hairy">
  						<label for="hairy"> Hairy </label><br>
  						<input type="radio" id="course" name="stem_texture[]" value="course">
  						<label for="course"> Course </label><br><br>
  						<input type="radio" id="thorned" name="stem_texture[]" value="thorned">
						<label for="thorned"> Thorned </label><br>
						<input type="radio" id="shag" name="stem_texture[]" value="shag">
						<label for="shag"> Shag </label><br>
  						</div>
  						<div class="col">
  						<p> Stem Shape </p>
  						<input type="radio" id="branching" name="stem_shape[]" value="branching">
						<label for="branching"> Branching </label><br>
						<input type="radio" id="single" name="stem_shape[]" value="single">
						<label for="single"> Single </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Edges </p>
  						<input type="radio" id="toothed" name="leaf_edges[]" value="toothed">
						<label for="toothed"> Toothed </label><br>
						<input type="radio" id="smooth" name="smooth" value="smooth">
						<label for="smooth"> Smooth </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Texture </p>
  						<input type="radio" id="smooth" name="leaf_texture[]" value="smooth">
						<label for="smooth"> Smooth </label><br>
						<input type="radio" id="hairy" name="leaf_texture[]" value="hairy">
						<label for="hairy"> Hairy </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Shape </p>
  						<input type="radio" id="elipse" name="leaf_shape[]" value="elipse">
						<label for="elipse"> Elipse </label><br>
						<input type="radio" id="lobed" name="leaf_shape[]" value="lobed">
						<label for="lobed"> Lobed </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Leaf Type </p>
  						<input type="radio" id="compound" name="leaf_type[]" value="compound">
						<label for="compound"> Compound </label><br>
						<input type="radio" id="simple" name="leaf_type[]" value="simple">
						<label for="simple"> Simple </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Flower Color </p>
  						<input type="radio" id="white" name="flower_color[]" value="white">
						<label for="white"> White </label><br>
						<input type="radio" id="green" name="flower_color[]" value="green">
						<label for="green"> Green </label><br>
						<input type="radio" id="yellow" name="flower_color[]" value="yellow">
						<label for="flower_yellow"> Yellow </label><br>
						<input type="radio" id="orange" name="flower_color[]" value="orange">
						<label for="orange"> Orange </label><br>
						<input type="radio" id="red" name="flower_color[]" value="red">
						<label for="flower_red"> Red </label><br>
						<input type="radio" id="blue" name="flower_color[]" value="blue">
						<label for="blue"> Blue </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Flower Type </p>
  						<input type="radio" id="crateriform" name="flower_type[]" value="crateriform">
						<label for="crateriform"> Crateriform </label><br>
						<input type="radio" id="campanulate" name="flower_type[]" value="campanulate">
						<label for="campanulate"> Campanulate </label><br>
						<input type="radio" id="cruciform" name="flower_type[]" value="cruciform">
						<label for="cruciform"> Cruciform </label><br>
						<input type="radio" id="rotate" name="flower_type[]" value="rotate">
						<label for="rotate"> Rotate </label><br>
						<input type="radio" id="ligulate" name="flower_type[]" value="ligulate">
						<label for="ligulate"> Ligulate </label><br>
						<input type="radio" id="catkin" name="flower_type[]" value="catkin">
						<label for="catkin"> Catkin </label><br>
						<input type="radio" id="urceolate" name="flower_type[]" value="urceolate">
						<label for="urceolate"> Urceolate </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Color </p>
  						<input type="radio" id="white" name="fruit_color[]" value="white">
						<label for="white"> White </label><br>
						<input type="radio" id="green" name="fruit_color[]" value="green">
						<label for="green"> Green </label><br>
						<input type="radio" id="purple" name="fruit_color[]" value="purple">
						<label for="purple"> Purple </label><br>
						<input type="radio" id="brown" name="fruit_color[]" value="brown">
						<label for="brown"> Brown </label><br>
						<input type="radio" id="yellow" name="fruit_color[]" value="yellow">
						<label for="yellow"> Yellow </label><br>
						<input type="radio" id="black" name="fruit_color[]" value="black">
						<label for="black"> Black </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Edible </p>
  						<input type="radio" id="1" name="fruit_edible[]" value="1">
						<label for="1"> Yes </label><br>
						<input type="radio" id="0" name="fruit_edible[]" value="0">
						<label for="0"> No </label><br>
  						</div>
  						
  						<div class="col">
  						<p> Fruit Season </p>
  						<input type="radio" id="april" name="fruit_season[]" value="april">
						<label for="april"> April </label><br>
  						<input type="radio" id="fruit_may" name="fruit_season[]" value="may">
						<label for="may"> May </label><br>
  						<input type="radio" id="june" name="fruit_season[]" value="june">
						<label for="june"> June </label><br>
						<input type="radio" id="july" name="fruit_season[]" value="july">
						<label for="july"> July </label><br>
						<input type="radio" id="fruit_august" name="fruit_season[]" value="august">
						<label for="august"> August </label><br>
						<input type="radio" id="october" name="fruit_season[]" value="october">
						<label for="october"> October </label><br>
  						</div>
  						
  						</div>
  						
					</div>
					
					</div>
					</form>
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
