<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = '4k';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
     
             $imie = $_GET['imie'];
             $nazwisko = $_GET['nazwisko'];
             $srednia = $_GET['srednia'];
$query = "Insert into uczen( imie, nazwisko, srednia) values( '$imie', '$nazwisko', '$srednia')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run)
{
    echo "Formularz zatwierdzony";
}
else
{
    echo "formularz jest błędny";
}
         }
?>

<html>
    <head>
        <body>
<form action="" method="get">
Imie:<input type="text" name="imie"><br>
Nazwisko:<input type="text" name="nazwisko"><br>
Srednia:<input type="text" name="srednia"><br>
<input name="sub" type="submit" value="ok">
</form>
         <body>
    </head>
</html>