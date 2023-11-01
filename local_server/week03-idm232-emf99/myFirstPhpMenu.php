<!DOCTYPE html>
<html>

<head>
  <title>Static Main Menu</title>
  <link rel="stylesheet" href="general.css">
</head>

<body>
  <h1>PHP Main Menu</h1>

    <div id="content"> 
        <?php
            // echo "hello"

            $rNum = rand(1, 15);
            for ($lp = 0; $lp <= $rNum; $lp++) { 
                // echo "works";
                echo "<figure class='oneRec'>";
                echo "<img src='images/0101_FPP_Chicken-Rice_97338_WEB_SQ.png' alt='FPP Chicken Rice'>";
                echo "<figcaption>" . $lp . ". Ancho-Orange Chicken </figcaption>";
                echo "</figure>";    
            }


        ?>
    </div>

</body>

</html>