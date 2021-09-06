<html>
    <head>
        <body>
           
           

           <form method="POST"> 

           <input type="text" name="LOS">
           <input type="submit" value="LOSUJ">

           </form>

        </body>
    </head>
</html>
            <?php
                
                    $x = $_POST["LOS"];

                    for ($i=0; $i<$x; $i++)
                    {
                        
                    echo "<br>";
                    echo rand(1,1000);
                    
                    }
                    
                
           ?>