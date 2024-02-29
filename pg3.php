<?php 
    echo "<ul>";
    for($i = 0; $i <= 100; $i++){
        if($i % 3 === 0){
            echo "<li>" . $i . "</li> <br>";
        }
    }
    echo "</ul>";
?>