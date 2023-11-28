<?php
// Report all error information on the webpage
error_reporting(E_ALL);
ini_set('display_errors', 1);

$db_name = "cs485_labs";
$db_user = "root";
$db_passwd = "1111";
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
        $sql = "SELECT Name FROM Plant WHERE PlantID IN ";
        // Check if any checkboxes were selected
        if (! empty($stemColors)) {
            // Loop through the selected colors
            $cnt = 1;
            foreach ($stemColors as $color) {
                $color = ucfirst($color);
                
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Color ='" . $color . "')";
                if ($cnt < count($stemColors)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($stemTexture)) {
            if (! empty($stemColors)) {
                $sql .= "AND PlantID IN";
            }
            $cnt = 1;
            foreach ($stemTexture as $texture) {
                $texture = ucfirst($texture);
                
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Texture ='" . $texture . "')";
                if ($cnt < count($stemTexture)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($stemShape)) {
            if (! empty($stemTexture) || ! empty($stemColors)) {
                $sql .= "AND PlantID IN";
            }
            $cnt = 1;
            foreach ($stemShape as $shape) {
                $shape = ucfirst($shape);
                
                $sql .= "(SELECT PlantID FROM STEM WHERE STEM.Shape ='" . $shape . "')";
                if ($cnt < count($stemShape)) {
                    $sql .= "OR PlantID IN";
                }
                $cnt ++;
            }
        }
        if (! empty($leafEdges)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape)) {
                $sql .= "AND PlantID IN";
            }
            $cnt = 1;
            foreach ($leafEdges as $edge) {
                $edge = ucfirst($edge);
                
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Edges ='" . $edge . "')";
                if ($cnt < count($leafEdges)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        
        if (! empty($leafTexture)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($leafTexture as $lTExture) {
                $lTExture = ucfirst($lTExture);
                
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Texture ='" . $lTExture . "')";
                if ($cnt < count($leafTexture)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        
        if (! empty($leafShape)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($leafShape as $lShape) {
                $lShape = ucfirst($lShape);
                
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.Shape ='" . $lShape . "')";
                if ($cnt < count($leafShape)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($leafType)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($leafType as $lType) {
                $lType = ucfirst($lType);
                
                $sql .= "(SELECT PlantID FROM LEAF WHERE Leaf.LeafType ='" . $lType . "')";
                if ($cnt < count($leafType)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($flowerColor)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($flowerColor as $fColor) {
                $fColor = ucfirst($fColor);
                
                $sql .= "(SELECT PlantID FROM Flower WHERE Flower.Color ='" . $fColor . "')";
                if ($cnt < count($flowerColor)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        
        if (! empty($flowerType)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($flowerType as $fType) {
                $fType = ucfirst($fType);
                
                $sql .= "(SELECT PlantID FROM Flower WHERE Flower.Color ='" . $fType . "')";
                if ($cnt < count($flowerType)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($fruitColor)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($fruitColor as $frColor) {
                $cnt ++;
                $frColor = ucfirst($frColor);
                
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Color ='" . $frColor . "')";
                if ($cnt < count($fruitColor)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($fruitEdible)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType) || ! empty($fruitColor)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($fruitEdible as $frEdible) {
                $frEdible = ucfirst($frEdible);
                
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Edible ='" . $frEdible . "')";
                if ($cnt < count($fruitEdible)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        if (! empty($fruitSeason)) {
            if (! empty($stemTexture) || ! empty($stemColors) || ! empty($stemShape) || ! empty($leafEdges) || ! empty($leafTexture) || ! empty($leafShape) || ! empty($leafType) || ! empty($flowerColor) || ! empty($flowerType) || ! empty($fruitColor) || ! empty($fruitEdible)) {
                $sql .= "AND PlantID IN ";
            }
            $cnt = 1;
            foreach ($fruitSeason as $frSeason) {
                $frSeason = ucfirst($frSeason);
                
                $sql .= "(SELECT PlantID FROM Fruit WHERE Fruit.Season ='" . $frSeason . "')";
                if ($cnt < count($fruitSeason)) {
                    $sql .= "OR PlantID IN ";
                }
                $cnt ++;
            }
        }
        
        // Ending we want to add ; and query the statement
        $sql .= ";";
        // echo $sql;
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