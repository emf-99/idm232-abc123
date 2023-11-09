<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>made with love</title>
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

    <header>

    <div class="hero">
        <div class="hero-image-container">
            <img src="images/headerWlogoHeart.png" alt="Hero Image" class="hero-image">
        </div>
    </div>

    <a href="index.html" class="back_button">←</a>
    
    </header>

    <main>
        <div class="containerOne">
            

        <?php
                // Get all the recipes from "recipes" table in the "idm232" database
                // $query = "SELECT * FROM recipes";
                $query = "SELECT * FROM `recipes` WHERE `id` = 23 ";
                $results = mysqli_query($db_connection, $query);
                if ($results->num_rows > 0) {
                  consoleMsg("Query successful! number of rows: $results->num_rows");
                  while ($oneRecipe = mysqli_fetch_array($results)) {

                    $id = $oneRecipe['id']; 
                    echo '<div class="main_info">';
                    
                    echo '<figure class="oneRec">';
                        echo '<img src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
                    
                      echo '<div class="text">';
                        echo '<div class="title">';
                        echo '<figcaption>' . ' ' . $oneRecipe['Title'] . '</figcaption>';
                        echo '</div>';

                        echo '<div class="subTitle">';
                        echo '<figcaption class="subCap">' . ' ' . $oneRecipe['Subtitle'] . '</figcaption>';
                        echo '</div>';

                        echo '<div class="timeEst">';
                        echo '<figcaption class="time">' . ' ' . $oneRecipe['Cook Time'] . '</figcaption>';
                        echo '</div>';

                        echo '<div class="servingSize">';
                        echo '<figcaption class="serving">' . ' ' . $oneRecipe['Servings'] . ' servings </figcaption>';
                        echo '</div>';

                        echo '<div class="recDesc">';
                        echo '<p class="desc">' . ' ' . $oneRecipe['Description'] . '</p>';
                        echo '</div>';

                        echo '<div class="caloriesPerserving">';
                        echo '<figcaption class="calories">' . ' ' . $oneRecipe['Cal/Serving'] . ' calories </figcaption>';
                        echo '</div>';
                      echo '</div>';
                    echo '</figure>';
                    echo '</div>';
                  }

                } else {
                  consoleMsg("QUERY ERROR");
                }
            ?>

            <!-- <div class="main_info">
                <figure class="oneRec">

                        <img src="images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png" alt="Ancho-Orange Chicken">
                    
                <div class="text">
                    <div class="title">
                        <figcaption>Ancho-Orange Chicken</figcaption>
                    </div>

                    <div class="subTitle">
                        <figcaption class="subCap">with Kale Rice & Roasted Carrots</figcaption>
                    </div>

                    <div class="timeEst">
                        <figcaption class="time">45 min</figcaption>
                    </div>

                    <div class="servingSize">
                        <figcaption class="serving">4 servings</figcaption>
                    </div>

                    <div class="recDesc">
                        <p class="desc">Weʼre amping up chicken breasts with a glaze of smoky ancho chile paste and fresh orange juice in this recipe. 
                            On the side, roasted carrots and lightly creamy, golden raisin-studded rice perfectly accent the sweetness of the glaze.</p>
                    </div>

                    <div class="caloriesPerserving">
                        <figcaption class="calories">600 calories per serving </figcaption>
                    </div>

                </div>

                  </figure>
            </div> -->
    
        </div>

        <div class="containerTwo">

        <?php
                // Get all the recipes from "recipes" table in the "idm232" database
                // $query = "SELECT * FROM recipes";
                $query = "SELECT * FROM `recipes` WHERE `id` = 23 ";
                $results = mysqli_query($db_connection, $query);
                if ($results->num_rows > 0) {
                  consoleMsg("Query successful! number of rows: $results->num_rows");
                  while ($oneRecipe = mysqli_fetch_array($results)) {

                    $id = $oneRecipe['id']; 
                    echo '<div class="ingredients">';
                    
                    echo '<figure class="ing">';
                    echo '<img class="ingImg" src="./images/ing/' . $oneRecipe['Ingredients IMG'] . '" alt="Ingredients Image">';
                    
                      echo '<div class="text">';

                      echo '<div class="ingList">';
                        echo '<figcaption class="ingListTitle">Ingredients</figcaption>';
                        $ingredientsWithBreaks = str_replace('*', '<br>', $oneRecipe['All Ingredients']);
                        echo '<figcaption class="ingList">' . ' ' . $ingredientsWithBreaks . '</figcaption>';
                        echo '</div>';
                      echo '</div>';

                      echo '</div>';
                    echo '</figure>';
                    echo '</div>';
                  }

                } else {
                  consoleMsg("QUERY ERROR");
                }
            ?>

            <!-- <div class="ingredients">
                <figure class="ing">

                        <img class="ingImg" src="images/0101_ING_FPP_large_feature.png" alt="Ancho-Orange Chicken">
                    
                <div class="text">
                    <div class="ingList">
                        <figcaption class="ingListTitle">Ingredients</figcaption>
                        <figcaption class="ingList">
                            4 Boneless, Skinless Chicken Breasts <br>
                            1 Lime <br>
                            1 Tbsp Ancho Chile Paste <br>
                            1 bunch Kale <br>
                            2 Tbsps Butter <br>
                            ¾ cup Jasmine Rice <br>
                            2 cloves Garlic <br>
                            2 Tbsps Crème Fraîche <br>
                            4 Carrots <br>
                            3 Tbsps Golden Raisins <br>
                            1 Orange <br>
                        </figcaption>
                    </div>
                </div>
            </div>
                 </figure>
        </div> -->

        <div class="containerThree">

        <?php
                // Get all the recipes from "recipes" table in the "idm232" database
                // $query = "SELECT * FROM recipes";
                $query = "SELECT * FROM `recipes` WHERE `id` = 23 ";
                $results = mysqli_query($db_connection, $query);
                if ($results->num_rows > 0) {
                  consoleMsg("Query successful! number of rows: $results->num_rows");
                  while ($oneRecipe = mysqli_fetch_array($results)) {

                    $id = $oneRecipe['id']; 
                    echo '<div class="steps">';
                    echo '<figure class="step">';

                        // echo '<img src="./images/' . $oneRecipe['Step IMGs'] . '" alt="Step Image">';
                        // echo '<figcaption class="stepNum">' . $id . ' ' . $oneRecipe['All Ingredients'] . '</figcaption>';
                        // echo '<figcaption class="stepName">' . $id . ' ' . $oneRecipe['All Ingredients'] . '</figcaption>';
                        $stepsWithBreaks = str_replace('*', '<br>', $oneRecipe['All Steps']);
                        echo '<figcaption class="stepDesc">' . ' ' . $stepsWithBreaks . '</figcaption>';

                        
                    echo '</figure>';
                    echo '</div>';
                  }

                } else {
                  consoleMsg("QUERY ERROR");
                }
            ?>
        <

        <!-- <div class="steps">
            <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18594_WEB.png" alt="step 1">
                <figcaption class="stepNum">1.</figcaption>
                <figcaption class="stepName">Cook the rice:</figcaption>
                <figcaption class="stepDesc">Place an oven rack in the center of the oven, then preheat to 450°F. 
                    In a medium pot, <b>combine the rice,</b> a big pinch of salt, and 1 1/2 cups of water. Heat to boiling on high. Once boiling, 
                    cover and reduce the heat to low. Cook 12 to 14 minutes, or until the water has been absorbed and the rice is tender. 
                    Turn off the heat and fluff with a fork. Cover to keep warm.</figcaption>
              </figure>

              <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18622_WEB.png" alt="step 2">
                <figcaption class="stepNum">2.</figcaption>
                <figcaption class="stepName">Prepare the ingredients & make the glaze:</figcaption>
                <figcaption class="stepDesc">While the rice cooks, wash and dry the fresh produce. Peel the carrots; quarter lengthwise, 
                    then halve crosswise. Peel and roughly chop the garlic. Remove and discard the stems of the kale; finely chop the leaves. 
                    Using a peeler, remove the lime rind, avoiding the white pith; mince to get 2 teaspoons of zest (or use a zester). 
                    Halve the lime crosswise. Halve the orange; squeeze the juice into a bowl, 
                    straining out any seeds. Whisk in the chile paste and 2 tablespoons of water until smooth.</figcaption>
              </figure>

              <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18626_WEB.png" alt="step 3">
                <figcaption class="stepNum">3.</figcaption>
                <figcaption class="stepName">Roast the carrots:</figcaption>
                <figcaption class="stepDesc">Place the sliced carrots on a sheet pan. Drizzle with olive oil and season with salt and pepper; 
                    toss to coat. Arrange in an even layer. 
                    Roast 15 to 17 minutes, or until tender when pierced with a fork. Remove from the oven.</figcaption>
              </figure>

              <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18609_WEB.png" alt="step 4">
                <figcaption class="stepNum">4.</figcaption>
                <figcaption class="stepName">Cook the kale:</figcaption>
                <figcaption class="stepDesc">While the carrots roast, in a large pan (nonstick, if you have one), heat 2 teaspoons of olive oil on medium-high until hot. 
                    Add the chopped garlic and cook, stirring constantly, 30 seconds to 1 minute, or until fragrant. Add the chopped kale; 
                    season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until slightly wilted. Add 1/3 cup of water; 
                    season with salt and pepper. Cook, stirring occasionally, 3 to 4 minutes, or until the kale has wilted and the water has 
                    cooked off. Transfer to the pot of cooked rice. Stir to combine; 
                    season with salt and pepper to taste. Cover to keep warm. Wipe out the pan.</figcaption>
              </figure>

              <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18639_WEB.png" alt="step 5">
                <figcaption class="stepNum">5.</figcaption>
                <figcaption class="stepName">Cook & glaze the chicken:</figcaption>
                <figcaption class="stepDesc">While the carrots continue to roast, pat the chicken dry with paper towels; season with salt and pepper on both sides. 
                    In the same pan, heat 2 teaspoons of olive oil on medium-high until hot. Add the seasoned chicken and cook 4 to 6 minutes on the first side, or until browned. 
                    Flip and cook 2 to 3 minutes, or until lightly browned. Add the glaze and cook, frequently spooning the glaze over the chicken, 2 to 3 minutes, or until the chicken is coated and cooked through. 
                    Turn off the heat; stir the butter and the juice of 1 lime half into the glaze until the butter has melted. 
                    Season with salt and pepper to taste.</figcaption>
              </figure>

              <figure class="step">
                <img src="images/0101_FPP_Chicken-Rice_18630_WEB.png" alt="step 6">
                <figcaption class="stepNum">6.</figcaption>
                <figcaption class="stepName">Finish the rice & serve your dish:</figcaption>
                <figcaption class="stepDesc">To the pot of cooked rice and kale, add the lime zest, crème fraîche, raisins, and the juice of the remaining lime half. 
                    Stir to combine; season with salt and pepper to taste. Serve the glazed chicken with the finished rice and roasted carrots. 
                    Top the chicken with the remaining glaze from the pan. Enjoy! </figcaption>
              </figure>

        </div>  -->

        </div>

    </main>

    <a href="index.html" class="back_button">←</a>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 made with love <br> website by ella fromherz </p>
        </div>
    </footer>
    
    <script src="main.js"></script>
</body>
</html>
