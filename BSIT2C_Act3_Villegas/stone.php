<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body style="text-align: center">

    <div id="answer">
        <?php 
            $name = $_POST["Name"];
            $month = $_POST["month"];
          

            if ($month == "January")
            { 
                echo "<h2 class='result'>
                            Hi $name your Zodiac Sign is CAPRICORN and 
                            your Birthstone is Garnet!
                            </h2>";
                echo "<h4 class='signs'>Capricorn </h4><br>";
                echo "<img id='zodiac' width='350' height='349' src='zodiac/Capricorn.jpg'><br>";
                echo "<h4 class='stones'>Garnet</h4><br>";
                echo "<img id='birthstone' width='350' height='349'src='birthstone/januarygarnet.jpg'><br>";
            }

            else if ($month == "February")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is AQUARIUS and 
                            your Birthstone is AMETHYST!
                            </h2>";
                    echo "<h4 class='signs'>Aquarius </h4><br>";
                    echo " <img id='zodiac' width='350' height='349' src='zodiac/aquarius.jpg'><br>";
                    echo "<h4 class='stones'>Amethyst</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/febamethyst.jpg'><br>";
            }

            else if ($month == "March")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is PISCES and 
                            your Birthstone is AQUAMARINE!
                            </h2>";
                    echo "<h4 class='signs'>Pisces </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/pisces.jpg'><br>";
                    echo "<h4 class='stones'>Aquamarine</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/maraqua.jpg'><br>";
            }
            
            else if ($month == "April")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is ARIES and 
                            your Birthstone is DIAMOND!
                            </h2>";
                    echo "<h4 class='signs'>Aries</h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/aries.jpg'><br>";
                    echo "<h4 class='stones'>Diamond</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/aprildiamond.jpg'><br>";
            }

            else if ($month == "May")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is TAURUS and 
                            your Birthstone is EMERALD!
                            </h2>";
                    echo "<h4 class='signs'>Taurus </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/taurus.jpg'><br>";
                    echo "<h4 class='stones'>Emerald</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/mayemerald.jpg'><br>";
            }

            else if ($month == "June")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is GEMINI and 
                            your Birthstone is PEARL!
                            </h2>";
                    echo "<h4 class='signs'>Gemini </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/gemini.jpg'><br>";
                    echo "<h4 class='stones'>Pearl</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/junepearl.jpg'><br>";
            }

            else if ($month == "July")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is CANCER and 
                            your Birthstone is RUBY!
                            </h2>";
                    echo "<h4 class='signs'>Cancer</h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/cancer.jpg'><br>";
                    echo "<h4 class='stones'>Ruby</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/julyruby.jpg'><br>";
            }

            else if ($month == "August")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is LEO and 
                            your Birthstone is Peridot!
                            </h2>";
                    echo "<h4 class='signs'>Leo</h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/leo.webp'><br>";
                    echo "<h4 class='stones'>Peridot</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/augustperidot.jpg'><br>";
            }

            else if ($month == "September")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is VIRGO and 
                            your Birthstone is Sapphire!
                            </h2>";
                    echo "<h4 class='signs'>Virgo </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/virgo.jpg'><br>";
                    echo "<h4 class='stones'>Sapphire</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/septsapphire.jpg'><br>";
            }

            else if ($month == "October")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is LIBRA and 
                            your Birthstone is Opal!
                            </h2>";
                    echo "<h4 class='signs'>Libra </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/libra.jpg'><br>";
                    echo "<h4 class='stones'>Opal</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/october.jpg'><br>";
            }

            else if ($month == "November")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is SCOPRIO and 
                            your Birthstone is CITRINE!
                            </h2>";
                    echo "<h4 class='signs'>Scorpio</h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/scorpio.jpg'><br>";
                    echo "<h4 class='stones'>Citrine</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/novemcitrine.jpg'><br>";
            }

            else if ($month == "December")
            {
                    echo " <h2 class='result'>Hi $name your Zodiac Sign is SAGGITARIUS and 
                            your Birthstone is TOPAZ!
                            </h2>";
                    echo "<h4 class='signs'>Sagittarius </h4><br>";
                    echo "<img id='zodiac' width='350' height='349' src='zodiac/sagittarius.jpg'><br>";
                    echo "<h4 class='stones'>Topaz</h4><br>";
                    echo "<img id='birthstone' width='350' height='349'src='birthstone/december.jpg'><br>";
            }
        ?>
    

</div>

</body>
</html>



