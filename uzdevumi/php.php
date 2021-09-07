<!DOCTYPE html>

<?php

include('datubaze.php');
$select="select id, nosaukums, apraksts from latvijasupes1 WHERE id=2";
$result=$conn->query($select);

//while($rinda=$result->fetch_assoc()){
//echo"id: ".$rinda["id"]." upe ".$rinda["nosaukums"]." apr ".$rinda["apraksts"];}

$rinda=$result->fetch_assoc()
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP sintakse</title>
</head>
<body>
<p>PHP macibu fails</p>
<?php
echo "PHP kods";
echo "PHP kods";
print "vel viens kods";
echo "<h3>vel kads kods</h3>";
echo "Case sentitive";
echo "PHP kods";
print "vel viens kods";
echo "<h3>vel kads kods</h3>";
echo "Case sentitive";
$skaitlis_1=12;
$Skaitlis_1=13.969;
$jauna_vertiba_33;
$rinda="Teksta mainigais";

echo "<h3>".$rinda."</h3>";

echo "<br/> Reiz: ".$reizinajums=$skaitlis_1*$Skaitlis_1;
echo "<br/> Dal: ".$reizinajums=$skaitlis_1/$Skaitlis_1;
echo "<br/> Starp: ".$reizinajums=$skaitlis_1-$Skaitlis_1;
echo "<br/> Sum: ".$reizinajums=$skaitlis_1+$Skaitlis_1;
echo "<br/> Pakap: ".$reizinajums=$skaitlis_1**2;
echo "<br><br>";

echo "!! BIJA !!", $skaitlis_1;
$skaitlis_1=$Skaitlis_1*3;
echo "<br>!! TAGAD !!".$skaitlis_1;

$jauns_teksts=$rinda.$Skaitlis_1;
echo "<h3>".$jauns_teksts."</h3>"

?>

   <div class="row">
        <div class="left"></div>
        <div class="center">
        <div class="menurow">
        <?php
$fr1='<div class="mb"><a href="';
$fr2='">"';
$fr3='</a></div>';
$upe1="daugava.html";
$upe1_name="DAUGAVA";
$upe1="gauja.html";
$upe1_name="GAUJA";
$upe1="lielupe.html";
$upe1_name="LIELUPE";
?>
            /*<div class="mb"><a href="daugava.html">DAUGAVA</a></div>
            <div class="mb"><a href="gauja.html">GAUJA</a></div>
            <div class="mb"><a href="lielupe.html">LIELUPE</a></div>*/

        </div>
        </div>
        <div class="right"></div>
    </div>

<div class="row">
    <div class="left"></div>
    <div class="center"><img src="../images/upes.gif" alt="Иллюстрация" width="100%"></div>
    <div class="right"></div>
</div>



</body>
</html>