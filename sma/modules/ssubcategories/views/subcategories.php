<?php

    echo '<table style="margin: 0 auto;">';
    echo '<tr><td>';
    foreach($res->result() as $rows){
           
        echo '<button>'. $rows->name .'</button>';
         
    } 
    echo '</td></tr>';
    echo '</table>';
?>

