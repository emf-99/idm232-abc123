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
        // get all the recipies from the "recipies" table in the "idm232" database
        $query = "SELECT * FROM recipes";
        $results = mysqli_query($db_connection, $query);
        if ($results->num_rows > 0) {
          consoleMsg("query successful! number of rows: $results->num_rows");
        
        } else {
          consoleMsg("QUERY ERROR");
        }
        ?>
    </div>

</body>

</html>