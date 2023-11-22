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

    <div class="subhead"> 
      <h2>Recipies made simple...  Recipies made with love.</h2>
    </div> 
            <div class="search-filter-area">
              <div class="search-area">
                <form action="index.php" method="POST">
                  <label for="search"> </label>
                  <input type="search" id="search" name="search">
                  <button type="submit" name="submit" value="submit">Submit</button>
                </form>
              </div>
            
                <ul class="filters" id="filters">
                  <p>Click on a filter to select:</p>
                  <li><a href="index.php?filter=beef">Beef</a></li>
                  <li><a href="index.php?filter=steak">Steak</a></li>
                  <li><a href="index.php?filter=turkey">Turkey</a></li>
                  <li><a href="index.php?filter=chicken">Chicken</a></li>
                  <li><a href="index.php?filter=pork">Pork</a></li>
                  <li><a href="index.php?filter=fish">Fish</a></li>
                  <li><a href="index.php?filter=vegitarian">Vegitarian</a></li>
                  <button class="clearAllButton"><a class="clear" href="index.php?filter">Clear</a></button>
                </ul> 
            </div>

    </header>

    <main>
        <div class="container">

            <div class="recipe-thumbnails">
            
            <?php
                // Get all the recipes from "recipes" table in the "idm232" database

                $search = $_POST['search'];
                consoleMsg("Search is: $search");


                $filter = $_GET['filter'];
                consoleMsg("Filter is: $filter");


                if (!empty($search)) {
                  consoleMsg("Doing a SEARCH");
                  // $query = "select * FROM recipes WHERE title LIKE '%{$search}%'";
                  $query = "select * FROM recipes WHERE title LIKE '%{$search}%' OR subtitle LIKE '%{$search}%'";
                  $result = mysqli_query($connection, $query);
                } elseif (!empty($filter)) {
                  consoleMsg("Doing a FILTER");
                  $query = "select * FROM recipes WHERE proteine LIKE '%{$filter}%'";
                } else {
                  consoleMsg("Loading ALL RECIPES");
                  $query = "SELECT * FROM recipes";
                }


                // $query = "SELECT * FROM recipes";
                $results = mysqli_query($db_connection, $query);
                if ($results->num_rows > 0) {
                  consoleMsg("Query successful! number of rows: $results->num_rows");
                  while ($oneRecipe = mysqli_fetch_array($results)) {

                    $id = $oneRecipe['id']; 

                    echo '<a href="./detail/detail.php?recID='. $id .'">';
                      echo '<div class="recipe-thumbnail">';
                      
                      echo '<figure class="oneRec">';
                      echo '<img src="./images/' . $oneRecipe['Main IMG'] . '" alt="Dish Image">';
                      echo '<figcaption>' . ' ' . $oneRecipe['Title'] . '</figcaption>';
                      echo '</figure>';
                      echo '<figcaption class="subCap">' . ' ' . $oneRecipe['Subtitle'] . '</figcaption>';
                      echo '</figure>';
                    
                      echo '</div>';
                    echo '</a>';
                    }

                } else {
                  consoleMsg("QUERY ERROR");
                }
            ?>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2023 made with love <br> website by ella fromherz </p>
        </div>
    </footer>
    
    <script src="./scripts/main.js"></script>
</body>
</html>
