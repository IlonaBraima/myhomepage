<?php
$conn=mysqli_connect("localhost","root","","upes");    //connection datu bazei
    if(!$conn) {
        die("Pieslēguma kļuda: ".mysqli_connect_error());
}

?>