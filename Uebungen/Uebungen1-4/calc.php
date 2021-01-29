<?php
        $x = $_GET['x'];
        $y = $_GET['y'];
        $modus = $_GET['modus'];

        if(modus == 'plus') {
            $resultat = $x + $y;
        }

        if(modus == 'minus') {
            $resultat = $x - $y;
        }

        if(modus == 'mal') {
            $resultat = $x * $y;
        }

        if(modus == 'div') {
            $resultat = $x / $y;
        }
        
        echo "{$resultat}<br />";  
?>