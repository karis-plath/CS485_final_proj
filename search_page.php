
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="Style_sheet.css" />


</head>
<body>
        
	  <?php
include ("menu.php")?>
		<div class="bg-image">
			<img
				src="https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/t/c/TCP-Longleaf-Roberto-Gonzalez.jpg?crop=0%2C175%2C3000%2C1650&wid=2000&hei=1100&scl=1.5"
				class="w-100" />
			<div
				class="mask justify-content-center flex-column text-center"
				style="background-color: hsla(0, 0%, 98%, 0.6)">



				<!-- search -->
				<form method=POST>
				<div
					class="input-group d-flex col-xs-4 content-justify-center container centered">
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
							<div class="dropdown input-group-addon">
 						 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   							 Filter
  						</button>
 						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  						<a class="dropdown-item" href="#">Action</a>
    					<a class="dropdown-item" href="#">Another action</a>
    					<a class="dropdown-item" href="#">Something else here</a>
  						</div>
  						
					</div>
					</div>
						</form>
					
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
				</div>

			</div>

		</div>
	
</body>
<?php

?>
</html>
