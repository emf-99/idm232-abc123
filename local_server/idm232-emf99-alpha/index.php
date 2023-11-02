<!DOCTYPE html>
<html>

<head>
  <title>PHP Main Menu</title>
  <link rel="stylesheet" href="./styles/general.css">
</head>

<body>



<?php
  // $msg = "HOWDY";
  // echo '<script type="text/javascript">console.log("'. $msg .'");</script>';

  require_once './includes/fun.php';
  consoleMsg("PHP to JS is wicked fun!");

  // include env.php that holds global vars with secret info
  require_once './env.php';

  // include database connection code
  require_once './includes/database.php';

?>

  <h1>PHP Main Menu Dynamic</h1>

    <div id="content"> 
        <?php
            // echo "hello"

            // $rNum = rand(1, 15);
            // for ($lp = 0; $lp <= $rNum; $lp++) { 
                // echo "works";
                // echo "<figure class='oneRec'>";
                // echo "<img src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png' alt='FPP Chicken Rice'>";
                // echo "<figcaption>" . $lp . ". Ancho-Orange Chicken </figcaption>";
                // echo "</figure>";    
            // }


        ?>

<?php
      // Get all the recipes from "recipes" table in the "idm232" database
      $query = "SELECT * FROM recipes";
      $results = mysqli_query($db_connection, $query);
      if ($results->num_rows > 0) {
        consoleMsg("Query successful! number of rows: $results->num_rows");
        while ($oneRecipe = mysqli_fetch_array($results)) {
          // echo '<h3>' .$oneRecipe['Title']. ' - '  . $oneRecipe['Cal/Serving']  .  '</h3>'; 
          $id = $oneRecipe['id'];
          if ($id % 2 == 0) {
            // convert line 56 like 72
            echo '<figure class="oneRec">';
          } else {
            echo '<figure class="oneRecOdd">';
          }
          // like line 74
          echo '<img src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
          // like line 75
          echo '<figcaption>' . $id . ' ' . $oneRecipe['Title'] . '</figcaption>';
          echo '</figure>';
          // like line 77
          echo '<figcaption>' . $id . ' ' . $oneRecipe['Subtitle'] . '</figcaption>';
          echo '</figure>';
        }

      } else {
        consoleMsg("QUERY ERROR");
      }
    ?>
 <figure class="oneRec">
                    <img src="images/0101_2PM_Steak-Diane_97315_SQ Small.png" alt="Beef Medallions & Mushroom Sauce">
                    <figcaption>Beef Medallions & Mushroom Sauce</figcaption>
                    <figcaption class="subCap">with Mashed Potatoes</figcaption>
                  </figure>
    </div>

</body>

</html>