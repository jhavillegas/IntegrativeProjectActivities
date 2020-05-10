<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align: center; background-color:lightpink;">
<?php
            $upper = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
            $lower = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
            $numm = array(0,1,2,3,4,5,6,7,8,9);
        ?>

      <div class="profile">
         <?php
            echo "<img class='circular' src='jha/jha.jpg' width='18%'height='200px'><br>";
         ?>
      </div>

    <div id="container">
        <div class="fullname">
         <?php
            echo $upper[9]. $lower[0]. $lower[17]. $lower[4]. $lower[13]." ".$upper[21]. $lower[8]. $lower[11]. $lower[11]. $lower[4]. $lower[6] .$lower[0].$lower[18]." ".$upper[15];
         ?>
        </div>
    </div>
    
    <div id="mid-container">
        <div id="info">
            <?php
                echo "<h2 class='info'>Info</h2>";
            ?>
        </div>
        <div class="square">
         <?php
            echo  "<i class='fa fa-map-marker' height='30px'></i>";
            Echo "<h3 class='n-address'>Address</h3>";
         ?>
         </div>

       <div class="square2">
         <div class="address">
         <?php
            echo $upper[3].$lower[14]. $lower[11].$lower[14]. $lower[17].$lower[4].$lower[18]." ".$upper[18].$lower[19].$lower[0]." ".$upper[2]. $lower[17].$lower[20].$lower[25]." ".$upper[12].$lower[0].$lower[17].$lower[8]. $lower[13].$lower[3]. $lower[20]. $lower[16]. $lower[20]. $lower[4];
         ?>
       </div>
    <div class="square3">
       <?php 
            Echo "<h3 class='n-bday'>Birthday<h3>";
         ?>
        </div>
        <div class="square4">
      <div class="birthday">
         <?php
            echo $upper[9].$lower[0].$lower[13].$lower[20].$lower[0].$lower[17].$lower[24]." ". $numm[3]." ".$numm[2].$numm[0].$numm[0].$numm[0];
         ?>
      </div>
    </div>
    <div class="square5">
        <?php
            Echo "<h3 class='n-age'>Age</h3>";
         ?>
    </div>
        <div class="square6">
            <div class="age">
            <?php
            echo $numm[2].$numm[0];
            ?>
            </div>
        </div>
    <div class="square7">
        <?php
            Echo "<h3 class='n-gender'>Gender</h3>";
         ?>
    </div>
    <div class="square8">
      <div class="gender">
         <?php
            echo $upper[12]. $lower[0]. $lower[11].$lower[4];
         ?>
      </div>
    </div>
    <div class="square9">
        <?php
            Echo "<h3 class='n-height'>Height</h3>";
         ?>
    </div>
    <div class="square10">
      <div class="height">
         <?php
            echo $numm[1].$numm[7].$numm[5]. " ".$lower[2]. $lower[12];
         ?>
      </div>
    </div>
    <div class="square11">
        <?php
            Echo "<h3 class='n-weight'>Weight</h3>";
         ?>
    </div>
    <div class="square12">
       <div class="weight">
            <?php
                echo $numm[6].$numm[8]."".$lower[10].$lower[6];
            ?>
        </div>
    </div>
    <div class="square13">
            <?php
                Echo "<h3 id='educ'>Educational Background</h3>";
            ?>
    </div>
    <div class="square14">
            <?php
                Echo "<h3 class='n-elementary'>Elementary</h3>";
            ?>
    </div>
    <div class="square15">
        <div class="elem">
            <?php
                echo $upper[3].$lower[14]. $lower[11].$lower[14]. $lower[17].$lower[4].$lower[18]." ".$upper[4].$lower[11].$lower[4].$lower[12].$lower[4].$lower[13].$lower[19].$lower[0].$lower[17].$lower[24]." ".$upper[18].$lower[2].$lower[7]. $lower[14]. $lower[14]. $lower[11];
            ?>
        </diV>
    </div>
    <div class="square16">
        <?php
                Echo "<h3 class='n-highschool'>Highschool</h3>";
            ?>
    </div>
    <div class="square17">
        <div class="high">
            <?php
                echo $upper[3].$lower[14]. $lower[11].$lower[14]. $lower[17].$lower[4].$lower[18]." ". $upper[13].$lower[0]. $lower[19].$lower[8].$lower[14].$lower[13].$lower[0].$lower[11]." ".$upper[7].$lower[8].$lower[6].$lower[7]." ". $upper[18].$lower[2].$lower[7]. $lower[14]. $lower[14]. $lower[11];
            ?>
        </div>
    </div>
    
    <div class="square18">
        <?php
         echo "<h2 id='self'>Self Interest<h/h2>";
         ?>
         </div>
    <div class="square19">
        <?php
         echo $upper[8]." ".$upper[11].$lower[8].$lower[10].$lower[4]." ".$upper[8].$lower[13].$lower[19].$lower[4].$lower[17].$lower[13].$lower[4].$lower[19]." ".$upper[18].$lower[20].$lower[17].$lower[5].$lower[8].$lower[13].$lower[6];
         ?>
        </div>
    </div>


    <div id="fav">
       <?php
       echo "<h2 class='fav'>My Favorite Movies</h2> <br>";
       echo $upper[18].$lower[14]." ".$upper[2].$lower[11].$lower[14].$lower[18].$lower[4]."<br>";
       echo $upper[14].$lower[2].$lower[4].$lower[0].$lower[13]."<br>";
       echo $upper[12].$lower[0].$lower[19].$lower[17].$lower[8].$lower[23];
       ?>
    </div>
</body>
</html>