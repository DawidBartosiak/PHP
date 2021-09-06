<html>
    <head>
        <body>
            
        <form method="POST"> 
        <input type="text" name="LICZBA">
        <input type="submit" value="LOSUJ">
        </form>

        </body>
    </head>
</html>
    
<?php
    
    $n = $_POST["LICZBA"];
                
    function fib($n)
        {
            if($n == 0) return 0;
            else if ($n == 1) return 1;
            
                else
                    {
                        return fib($n-1) + fib($n-2);
                    }
        }
                
            echo fib($n);
                 
            //Fib(0) = 0
            //Fib(1) =  1
            //Fib(n) = Fib(n-1) + Fib(n-2)
            //https://pl.wikipedia.org/wiki/Ci%C4%85g_Fibonacciego
?>