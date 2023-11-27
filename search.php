<?php
// Report all error information on the webpage
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_name = "cs485_labs";
$db_user = "root";
$db_passwd = "111111";
// $name = $_POST["searchBox"];
$name = isset($_POST["searchBox"]) ? $_POST["searchBox"] : null;
$db = new mysqli("localhost", $db_user, $db_passwd, $db_name);
// db location, user, passwd, database
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
} else {

    if (empty($name)) {
        $stemColors = isset($_POST["stem_colors"]) ? $_POST["stem_colors"] : [];
        $stemTexture = isset($_POST["stem_texture"]) ? $_POST["stem_texture"] : [];
        $stemShape = isset($_POST["stem_shape"]) ? $_POST["stem_shape"] : [];
        $leafEdges = isset($_POST["leaf_edges"]) ? $_POST["leaf_edges"] : [];
        $leafTexture = isset($_POST["leaf_texture"]) ? $_POST["leaf_texture"] : [];
        $leafShape = isset($_POST["leaf_shape"]) ? $_POST["leaf_shape"] : [];
        $leafType = isset($_POST["leaf_type"]) ? $_POST["leaf_type"] : [];
        $flowerColor = isset($_POST["flower_color"]) ? $_POST["flower_color"] : [];
        $flowerType = isset($_POST["flower_type"]) ? $_POST["flower_type"] : [];
        $fruitColor = isset($_POST["fruit_color"]) ? $_POST["fruit_color"] : [];
        $fruitEdible = isset($_POST["fruit_edible"]) ? $_POST["fruit_edible"] : [];
        $fruitSeason = isset($_POST["fruit_season"]) ? $_POST["fruit_season"] : [];
        $sql = "SELECT Name FROM Plant WHERE PlantID IN";
        // Check if any checkboxes were selected
        if (! empty($stemColors)) {
            echo "Selected colors:<br>";
            // Loop through the selected colors
            foreach ($stemColors as $color) {
                $color = ucfirst($color);
                echo $color . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Color ='" . $color . "')";
                echo $sql;
            }
        }
        if (! empty($stemTexture)) {
            if (! empty($stemColors)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($stemTexture as $texture) {
                $texture = ucfirst($texture);
                echo $texture . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Texture ='" . $texture . "')";
                echo $sql;
            }
        }
        if (! empty($stemShape)) {
            if (! empty($stemTexture) || ! empty($stemColors)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($stemShape as $shape) {
                $shape = ucfirst($shape);
                echo $shape . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Shape ='" . $shape . "')";
                echo $sql;
            }
        }
        if (! empty($leafEdges)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($leafEdges as $edge) {
                $edge = ucfirst($edge);
                echo $edge . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Edges ='" . $edge . "')";
                echo $sql;
            }
        }

        if (! empty($leafTexture)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($leafTexture as $lTExture) {
                $lTExture = ucfirst($lTExture);
                echo $lTExture . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Texture ='" . $lTExture . "')";
                echo $sql;
            }
        }

        if (! empty($leafShape)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($leafShape as $lShape) {
                $lShape = ucfirst($lShape);
                echo $lShape . " color was selected.<br>";
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Shape ='" . $lShape . "')";
                echo $sql;
            }
        }
        if (! empty($leafType)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($leafType as $lType) {
                $lType = ucfirst($lType);
                echo $lType . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.LeafType ='" . $lType . "')";
                echo $sql;
            }
        }
        if (! empty($flowerColor)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($flowerColor as $fColor) {
                $fColor = ucfirst($fColor);
                echo $fColor . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Flower WHERE Flower.Color ='" . $fColor . "')";
                echo $sql;
            }
        }

        if (! empty($flowerType)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($flowerType as $fType) {
                $fType = ucfirst($fType);
                echo $fType . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Flower WHERE Flower.Color ='" . $fType . "')";
                echo $sql;
            }
        }
        if (! empty($fruitColor)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($fruitColor as $frColor) {
                $frColor = ucfirst($frColor);
                echo $frColor . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Color ='" . $frColor . "')";
                echo $sql;
            }
        }
        if (! empty($fruitEdible)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType) || ! empty($fruitColor)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($fruitEdible as $frEdible) {
                $frEdible = ucfirst($frEdible);
                echo $frEdible . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Edible ='" . $frEdible . "')";
                echo $sql;
            }
        }
        if (! empty($fruitSeason)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType) || ! empty($fruitColor) || ! empty($fruitEdible)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($fruitSeason as $frSeason) {
                $frSeason = ucfirst($frSeason);
                echo $frSeason . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Season ='" . $frSeason . "')";
                echo $sql;
            }
        }
        if (! empty($fruitSeason)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType) || ! empty($fruitColor) || ! empty($fruitEdible)) {
                $sql .= "AND PlantID IN";
            }
            foreach ($fruitSeason as $frSeason) {
                $frSeason = ucfirst($frSeason);
                echo $frSeason . "color was selected.<br>";
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Season ='" . $frSeason . "')";
                echo $sql;
            }
        }
        // Ending we want to add ; and query the statement
        $sql .= ";";
        $r = $db->query($sql);
        if (mysqli_num_rows($r) === 0) {
            echo "No matching results";
        }
        while ($row = $r->fetch_assoc()) {
            echo '<a href="plant_info.php?id=' . $row['Name'] . '">' . $row['Name'] . '</a><br><br>';
        }
    } // When they just search
    else {
        $sql = "SELECT Name FROM `Plant` WHERE Name LIKE '%" . $name . "%'";
        $r = $db->query($sql);
        if (mysqli_num_rows($r) === 0) {
            echo "No matching results";
        }
        // $result = array();
        while ($row = $r->fetch_assoc()) {
            echo '<a href="plant_info.php?id=' . $row['Name'] . '">' . $row['Name'] . '</a><br><br>';
        }
    }
}

$db->close();
?> 