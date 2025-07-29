<?php

require_once('search_city.php');
$tokyo = searchCityTime('東京');

$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);

?>
<!DOCTYPE html>


<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>世界時計</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a  class="logo" href="index.html">World Clock</a>
    </header>

    <main>

    <div class="result">

        <div class ="result_card">
        <img class="result_card_img" src="img/japan.jpg" alt="国旗">
        <p class="result_card_city_name"><?php echo $tokyo['name']?></p>
        <p class="result_card_city_time"><?php echo $tokyo['time']?></p>
        </div>


        <div class="result_card">
        <img class="result_card_img" src="img/germany.jpg" alt="国旗">
        <p class="result_card_city_name"><?php echo $comparison['name']?></p>
        <p class="result_card_city_time"><?php echo $comparison['time']?></p>
        </div>

    </div>

    </main>
    
</body>
</html>