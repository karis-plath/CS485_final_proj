<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Karis Plath">
    <title> Profile </title>
  </head>

  <body>
  <?php include ("menu.php")?>
          
    <div id="Reading" class="tabcontent">
      <div id="currentTab">
        User Profile <br><br>
        This is your home base! <br><br>
        Use this page to view and manage the plants you have added
      </div>
    </div>
  </body>


<div id="data-container"></div>

<script>
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            // Parse the entire response text as JSON
            var data = JSON.parse(xhr.responseText);

            var dataContainer = document.getElementById("data-container");
            dataContainer.innerHTML = "<h2>data</h2>";

            data.forEach(function (item) {
                // Access the properties of the object and construct HTML
                var htmlString = "<button>" + item.Name + "</button><br>";

                // Append the HTML to the container
                dataContainer.innerHTML += htmlString;
            });
            
        } else {
            console.error("Failed to fetch data: " + xhr.status);
        }
    }
};

xhr.open("GET", "data_fetch.php", true);
xhr.send();
</script>

</html>