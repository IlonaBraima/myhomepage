<!DOCTYPE html>
<html lang="en">

<?php

include('db.php');
$select="select id, nosaukums, apraksts from latvijasupes1 WHERE id=2";
$result=$conn->query($select);

//while($rinda=$result->fetch_assoc()){
//echo"id: ".$rinda["id"]." upe ".$rinda["nosaukums"]." apr ".$rinda["apraksts"];}

$rinda=$result->fetch_assoc()
?>


<head>
    <meta charset="UTF-8">
    <link
            rel="stylesheet"
            href="uzdevumi.css"
            type="text/css">
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0 user-scalable=no, viewport-fit=cover" />

    <title>
<div class="upesname"><h1><?php $rinda["nosaukums"]?></h1></div>
    </title>
</head>
<body class="daugava">

<div>

    <div class="row">
        <div class="left">
        </div>
        <div class="center">
            <div class="upes-menu">
                <div class="upes-name"><h1>DAUGAVA</h1>
                </div>
                <div class="upes-back"><a class="iconhome" title="HOME" href="Upes.html"><img src="../images/home.png" alt="Home"></a>
                </div>
            </div>
        </div>

        <div class="right">
        </div>
    </div>

    <div class="row">
        <div class="left">
        </div>
        <div class="center">
            <p class="daugavafont">
                Daugava latviešiem ir viens nacionālajiem simboliem, kuru apdzied dziesmās,
                dēvējot par „Daugavu māmuļu”, par tautas „likteņupi”. Ar cīņu 20. gadsimta
                beigās pret Daugavas HES būvniecību, kuru izveidojot tiktu applūdināta Daugavas
                loku dabas parks starp Daugavpili un Krāslavu, sākās tautas atmoda, kas atnesa
                Latvijai neatkarību.
            </p>
        </div>
        <div class="right">
        </div>
    </div>


    <div class="row">
        <div class="left">
        </div>
        <div class="center">
            <div class="daugavaimg">
                <img src="../images/Daugava5.jpg" alt="Фото1" title="Daugava">
            </div>
            <div class="daugavaimg">
                <img src="../images/Daugava3.jpg" alt="Фото2" title="Daugava">
            </div>
            <div class="daugavaimg">
                <img src="../images/Daugava2.jpg" alt="Фото3" title="Daugava">
            </div>
        </div>
        <div class="right">
        </div>
    </div>
</div>


</body>
</html>