<?php
$conn=mysgli_connect("localhost","root","","upes");    //connection datu bazei
    if(!$conn) {
        die("Pieslēguma kļuda: ".mysgli_connect_error());
}



?>