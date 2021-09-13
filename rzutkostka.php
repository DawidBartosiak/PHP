<html>
    <head>
        <body>
            
        <form method="POST"> 
        <input type="submit" value="LOSUJ">
        </form>

        </body>
    </head>
</html>

<?php

$rand = rand (1,6);

switch ($rand)

    {
        case 1;
        echo "Wylosowało 1 oczko";
        break;

        case 2;
        echo "Wylosowało 2 oczko";
        break;

        case 3;
        echo "Wylosowało 3 oczko";
        break;

        case 4;
        echo "Wylosowało 4 oczko";
        break;

        case 5;
        echo "Wylosowało 5 oczko";
        break;

        case 6;
        echo "Wylosowało 6 oczko";
        break;
    }

?>