<?php 

    // loop for
    // for($i=1; $i <= 10;$i++) { 
    //     echo $i."<br>";
    // }
    
    echo "<h3>Looping Pertama</h3>";
    for ($i=2; $i <= 20; $i+=2) {    
        echo $i." - I Love PHP"."<br>";
    }

    echo "<h3>Looping Kedua</h3>";
    for ($i=20; $i >= 2; $i-=2) {    
        echo $i." - I Love PHP"."<br>";
    }

    echo "<br>";
    $fruits = ['Apel','Mangga','Nanas','Anggur'];

    foreach($fruits as $fruit){
        echo $fruit."<br>";
    }
?>