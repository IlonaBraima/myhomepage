<?php
$conn=mysqli_connect("localhost","root","","upes");    //connection datu bazei
    if(!$conn) {
        die("Pieslēguma kļuda: ".mysqli_connect_error());
}

?>

<?php
$connMyhomepage=mysqli_connect("localhost","root","","myhomepages_db");    //connection datu bazei
    if(!$connMyhomepage) {
        die("Pieslēguma kļuda: ".mysqli_connect_error());
}

?>