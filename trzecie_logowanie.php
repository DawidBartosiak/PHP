<html>
    <head>
        <body>
            
        <form method="POST"> 
        <input type="text" name="LOGIN">
        <input type="text" name="HASLO">
        <input type="submit" value="Zaloguj">

        </form>

        </body>
    </head>
</html>
    
<?php
    
    $LOG = $_POST["LOGIN"];
    $PASS = $_POST["HASLO"];

    $tab_log = ['Jacek', 'Bartosz'];
    $tab_pass = ['Baran', 'Owca'];
    
    if($LOG ==  $tab_log[0] && $PASS == $tab_pass[0])
    {
        echo"Zostałeś zalogowany!";
    }
    
    else
    {
        echo"Nie zostałeś zalogowany!";
    }
    
    
    echo"<br>";
    echo"Twój login wynosi ";
    echo strlen($LOG);
    echo" Liter";
    
    echo"<br>";
    echo"Twoje hasło wynosi ";
    echo strlen($PASS);
    echo" Litery";
    
?>