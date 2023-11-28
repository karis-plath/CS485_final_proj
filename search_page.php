
<!DOCTYPE html>
<html lang="en">
<head>
 
<meta charset="utf-8">
 
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
</head>
<body>
        
	  <?php include ("menu.php")?>
 
		
 
				<!-- search -->
				<div class="search" id="search">
				<form method=POST>
				<div class="col input-group flex-column content-justify-center centered">
					<input type="text" class="form-control input-lg" name="searchBox"
						placeholder="Search For Plant" id="searchButton">
					<div class="input-group-addon">
						<button class="btn btn-secondary show" id="search_icon" type="button submit">
						<i class="fa fa-search"></i>	
						</button>
						</div>
						</div>
						
					</form>
					<p id="data"></p>
						</div>
					<form method=POST">
 
  
					
					    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        
            <legend>Filter</legend>
    
  						
						<div>
						
					<p> Stem Color </p>
  						 <input type="checkbox" id="brown" name="stem_colors[]" value="brown">
  						<label for="brown"> Brown </label><br>
						<input type="checkbox" id="color_green" name="stem_colors[]" value="green">
  						<label for="green"> Green </label><br>
  						<input type="checkbox" id="red" name="stem_colors[]" value="red">
  						<label for="red"> Red </label><br><br>
  						</div>
  						
  					<div>
  						 <p> Stem Texture </p>
  						<input type="checkbox" id="smooth" name="stem_texture[]" value="smooth">
  						<label for="smooth"> Smooth </label><br>
						<input type="checkbox" id="hairy" name="stem_texture[]" value="hairy">
  						<label for="hairy"> Hairy </label><br>
  						<input type="checkbox" id="course" name="stem_texture[]" value="course">
  						<label for="course"> Course </label><br><br>
  						<input type="checkbox" id="thorned" name="stem_texture[]" value="thorned">
						<label for="thorned"> Thorned </label><br>
						<input type="checkbox" id="shag" name="stem_texture[]" value="shag">
						<label for="shag"> Shag </label><br>
  						</div>
  						
  						<div>
  						<p> Stem Shape </p>
  						<input type="checkbox" id="branching" name="stem_shape[]" value="branching">
						<label for="branching"> Branching </label><br>
						<input type="checkbox" id="single" name="stem_shape[]" value="single">
						<label for="single"> Single </label><br>
  						</div>
  						
  						<div>
  						<p> Leaf Edges </p>
  						<input type="checkbox" id="toothed" name="leaf_edges[]" value="toothed">
						<label for="toothed"> Toothed </label><br>
						<input type="checkbox" id="smooth" name="smooth" value="smooth">
						<label for="smooth"> Smooth </label><br>
  						</div>
  						
  						<div>
  						<p> Leaf Texture </p>
  						<input type="checkbox" id="smooth" name="leaf_texture[]" value="smooth">
						<label for="smooth"> Smooth </label><br>
						<input type="checkbox" id="hairy" name="leaf_texture[]" value="hairy">
						<label for="hairy"> Hairy </label><br>
  						</div>
  						
  						<div>
  						<p> Leaf Shape </p>
  						<input type="checkbox" id="elipse" name="leaf_shape[]" value="elipse">
						<label for="elipse"> Elipse </label><br>
						<input type="checkbox" id="lobed" name="leaf_shape[]" value="lobed">
						<label for="lobed"> Lobed </label><br>
  						</div>
  						
  						<div>
  						<p> Leaf Type </p>
  						<input type="checkbox" id="compound" name="leaf_type[]" value="compound">
						<label for="compound"> Compound </label><br>
						<input type="checkbox" id="simple" name="leaf_type[]" value="simple">
						<label for="simple"> Simple </label><br>
  						</div>
  						
  						<div>
  						<p> Flower Color </p>
  						<input type="checkbox" id="white" name="flower_color[]" value="white">
						<label for="white"> White </label><br>
						<input type="checkbox" id="green" name="flower_color[]" value="green">
						<label for="green"> Green </label><br>
						<input type="checkbox" id="yellow" name="flower_color[]" value="yellow">
						<label for="yellow"> Yellow </label><br>
						<input type="checkbox" id="orange" name="flower_color[]" value="orange">
						<label for="orange"> Orange </label><br>
						<input type="checkbox" id="red" name="flower_color[]" value="red">
						<label for="red"> Red </label><br>
						<input type="checkbox" id="blue" name="flower_color[]" value="blue">
						<label for="blue"> Blue </label><br>
  						</div>
  						
  						<div>
  						<p> Flower Type </p>
  						<input type="checkbox" id="crateriform" name="flower_type[]" value="crateriform">
						<label for="crateriform"> Crateriform </label><br>
						<input type="checkbox" id="campanulate" name="flower_type[]" value="campanulate">
						<label for="campanulate"> Campanulate </label><br>
						<input type="checkbox" id="cruciform" name="flower_type[]" value="cruciform">
						<label for="cruciform"> Cruciform </label><br>
						<input type="checkbox" id="rotate" name="flower_type[]" value="rotate">
						<label for="rotate"> Rotate </label><br>
						<input type="checkbox" id="ligulate" name="flower_type[]" value="ligulate">
						<label for="ligulate"> Ligulate </label><br>
						<input type="checkbox" id="catkin" name="flower_type[]" value="catkin">
						<label for="catkin"> Catkin </label><br>
						<input type="checkbox" id="urceolate" name="flower_type[]" value="urceolate">
						<label for="urceolate"> Urceolate </label><br>
  						</div>
  						
  						<div>
  						<p> Fruit Color </p>
  						<input type="checkbox" id="white" name="fruit_color[]" value="white">
						<label for="white"> White </label><br>
						<input type="checkbox" id="green" name="fruit_color[]" value="green">
						<label for="green"> Green </label><br>
						<input type="checkbox" id="purple" name="fruit_color[]" value="purple">
						<label for="purple"> Purple </label><br>
						<input type="checkbox" id="brown" name="fruit_color[]" value="brown">
						<label for="brown"> Brown </label><br>
						<input type="checkbox" id="yellow" name="fruit_color[]" value="yellow">
						<label for="yellow"> Yellow </label><br>
						<input type="checkbox" id="black" name="fruit_color[]" value="black">
						<label for="black"> Black </label><br>
  						</div>
  						
  						<div>
  						<p> Fruit Edible </p>
  						<input type="checkbox" id="1" name="fruit_edible[]" value="1">
						<label for="1"> Yes </label><br>
						<input type="checkbox" id="0" name="fruit_edible[]" value="0">
						<label for="0"> No </label><br>
  						</div>
  						
  						<div>
  						<p> Fruit Season </p>
  						<input type="checkbox" id="april" name="fruit_season[]" value="april">
						<label for="april"> April </label><br>
  						<input type="checkbox" id="fruit_may" name="fruit_season[]" value="may">
						<label for="may"> May </label><br>
  						<input type="checkbox" id="june" name="fruit_season[]" value="june">
						<label for="june"> June </label><br>
						<input type="checkbox" id="july" name="fruit_season[]" value="july">
						<label for="july"> July </label><br>
						<input type="checkbox" id="fruit_august" name="fruit_season[]" value="august">
						<label for="august"> August </label><br>
						<input type="checkbox" id="october" name="fruit_season[]" value="october">
						<label for="october"> October </label><br>
  						</div>
  						
  						<button class="filter" type="button submit">Apply Filters</button>
  						</div>
  						
  						</form>
  					
				
					
				
					</div>
					</div>
					</div>
					</p>
					</div>
					<div>
           
        </div>
    </div>
 
    <span class="openbtn" onclick="openNav()">&#9776;</span>
					
    <script>
 
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }
 
        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
 
 
    </script>
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

</html>