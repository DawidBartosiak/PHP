<html>
    <head>
        <body>
            
        <form method="POST"> 
        <input type=text name=LICZBA1>
        <input type=text name=LICZBA2>
        <input type=text name=LICZBA3>
        <input type="submit" value="LOSUJ">
        </form>

        </body>
    </head>
</html>

<?php

$start = $_POST["LICZBA1"];   
$koniec = $_POST["LICZBA2"];
$liczba_losowan = $_POST["LICZBA3"];

for($p = 0; $p < $liczba_losowan; $p++)
{
$losowanko = rand($start,$koniec);
echo "$losowanko <br>";
}
?>