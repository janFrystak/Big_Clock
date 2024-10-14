<?php

$this->extend("layout/template");
$this->section("content"); 

echo("<H1>AWESOME CLOCK</h1>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
            background-color: #f5f5f5;
        }
        .countdown {
            font-size: 50px;
            color: #333;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        .label {
            font-size: 25px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Countdown to Break</h1>
    
    <!-- Countdown Display -->
    <div class="countdown" id="countdown"></div>
    
    <!-- Labels for Units -->
    <div class="label" id="countdown-label"></div>

    <?php
    
    
    // Set the target date using PHP (adjust the target date as needed)
    //$targetDate = "2024-12-31 23:59:59";
    
    ?>
     
    <script>
        //Javascript
        var targetDate = new Date("<?php echo $combined; ?>").getTime();

        
        var countdownInterval = setInterval(function() {
           
            var now = new Date().getTime();

           
            var timeRemaining = targetDate - now;

           
          
            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            
            document.getElementById("countdown").innerHTML = minutes + "m " + seconds + "s";

          
            if (timeRemaining < 0) {
                clearInterval(countdownInterval);
                document.getElementById("countdown").innerHTML = "GO GO GO";
                //document.getElementById("countdown-label").style.display = 'none';
            }
        }, 1000);
        
    </script>
  
    
</body>
</html>