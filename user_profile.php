<html>
  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Karis Plath">
    <title> Profile </title>
  </head>

<!-- add a menu and set variable to current user -->
<?php include ("menu.php");
  $user = $_SESSION["Username"];?>
  
  <body>
      <!-- user information -->
    <div id="user_head">
      <img src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" alt="user profile image">
        Welcome <?= $user ?> !
    </div>
    
    <!-- vertical tabs -->
    <div class="tab">
      <button class="tablinks" type="button" onclick="showTab('Posts')">Posts</button>
      <button class="tablinks" type="button" onclick="showTab('Settings')">Settings</button>
    </div>
    
    <!-- displayed block -->
    <div id="data-container"></div>
    <div id="settings"></div>
  </body>

 <script>
      function showTab(tabName) {
        // Hide both containers initially
        var dataContainer = document.getElementById("data-container");
        var settingsContainer = document.getElementById("settings");
        dataContainer.style.display = "none";
        settingsContainer.style.display = "none";

        if (tabName === 'Posts') {
          fetchPostsData();
          dataContainer.style.display = "block"; // Show the posts container
        } else if (tabName === 'Settings') {
          showSettingsForm();
          settingsContainer.style.display = "block"; // Show the settings container
        }
      }

      function fetchPostsData() {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
              if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            // Parse the entire response text as JSON
            var data = JSON.parse(xhr.responseText);

            var dataContainer = document.getElementById("data-container");
            dataContainer.innerHTML = "<h2>Your Posts</h2>";

            data.forEach(function (item) {
                // Create a button element for each data item
                var button = document.createElement("button");
                button.innerHTML = item.Name;

                // Add an event listener to the button
                button.addEventListener("click", function () {
                    // Redirect to a new page with more information
                    window.location.href = "plant_details.php?id=" + item.PlantID;
                });

                // Append the button to the container
                dataContainer.appendChild(button);
                dataContainer.appendChild(document.createElement("br"));
            });
            
        } else {
            console.error("Failed to fetch data: " + xhr.status);
        }
    }
        };

        xhr.open("GET", "data_fetch.php", true);
        xhr.send();
      }

      function showSettingsForm() {
        // Replace the content of the settings div with your form
        var settingsDiv = document.getElementById("settings");
        settingsDiv.innerHTML = "<h2>Settings Form</h2>" +
          "<form action='update_settings.php' method='post'>" +
          "   <!-- Your form fields go here -->" +
          "   <input type='text' name='setting1' placeholder='Setting 1'>" +
          "   <input type='text' name='setting2' placeholder='Setting 2'>" +
          "   <input type='submit' value='Save'>" +
          "</form>";
      }
    </script>

</html>