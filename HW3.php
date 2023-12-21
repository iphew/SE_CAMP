<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./HW3.css">
</head>
<body>
    
    <div class="container">
        <div class="title">
            <h1>MULTIPLICATION TABLE</h1>
        </div>
        
        <div class="top">
            
        <div class="row">
            <?php
            for($i = 1; $i <= 24; $i++){
                echo "2 x ".$i." = ". 2*$i;
                echo "<br>";
            }
            ?>
        </div>
        </div>
    </div>
    <style>
        
    </style>
</body>

</html>