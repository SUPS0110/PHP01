<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    echo "Hello world";
    $sum=10;
     echo $sum;
     $name="my name  is <br><b> suprima </b>";
     echo $name;
     $userRole="sup";
     if( $userRole=="admin"){
        echo "you are admin";
     }
        else{
        echo "you are not admin";
     }
     for($i=0;$i<50;$i=$i+10){
        echo "<div class='x'> hi </div>";
     }

    ?>
    <?php
    $name1="suv";
    if($name1=="sulav"){
        ?>
        <div class="auto"> YOU ARE CORRECT </div>
        <p> HELLO</p>
        <?php
    } 
    else{ ?>
<div> you are incorrect</div>
    <?php } ?>
</body>
</html>