<?php
    echo "<H3> cara 1 </H3>";
    $i = 1;
    while ($i <= 10){
        print $i++;
    }
    echo "<BR>";
    echo "<BR> cara 2 <H3>";
    $i = 1;
    while ($i <= 10 ):
        print $i;
        $i++;
    endwhile; 
    ?>