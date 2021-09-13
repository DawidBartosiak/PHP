<?php

$link = mysql_connect("localhost", "", "")
or die("Could not select database");

mysql_select_db("bazaosob")
or die("Could not selected database");

$query = "SELECT * FROM osoby";
$result = mysql_query($query)
or die("Failed");

while($row = mysql_fetch_array($results))
{
    echo "<TD><TD>" . $row["imie"]
    "</TR><TD>" . $row["nazwisko"]
    "</TD></TR>";
}