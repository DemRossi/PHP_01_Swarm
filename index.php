<?php
        $checkIns = [
            [
                "username" => "Wesley Wijsen",
                "place" => "Pool Planet",
                "address" => "F.Rooseveltplaats"
            ],
            [
                "username" => "Iemand Anders",
                "place" => "StarBucks",
                "address" => "Astridplein"
            ],
            [
                "username" => "Boris Beer",
                "place" => "McDonalds",
                "address" => "Operaplein"
            ]
        ]
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Swarm</title>
</head>
<body>
    <header>
        <img src="https://fakeimg.pl/50x50/">
        <span class="myLocation">in <strong>Kapellen</strong></span>
    </header>
    <main>
            <?php
                foreach($checkIns as $c):
            ?>
        <div class="checkIn">
            
            <img src="https://fakeimg.pl/75x75/" class="profPic">
            <div class="dataContainer">
                <span class="name"><strong><?php echo $c["username"] ?></strong></span><br>
                <span class="place"><?php echo $c["place"] ?></span><br>
                <span class="address"><?php echo $c["address"] ?></span><br>
            </div>
            
        </div>
        
        <hr>
        <?php
            endforeach;
        ?>
    </main>
    <footer>
        <div class="menu" id="hive"></div>
        <div class="menu" id="list"></div>
        <div class="menu" id="cal"></div>
        <div class="menu" id="search"></div>
    </footer>
</body>
</html>