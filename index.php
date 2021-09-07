<!DOCTYPE html>
<html lang="en">

<?php
include('db.php');
$iconSelect = "SELECT * FROM head_right";
$iconResult = $connMyhomepage->query($iconSelect);
?>


<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>

<p>PHP fails</p>
<?php

<div class=head-r>
    <div class="flex just-center">

    <?php
    while ($icon = $iconResult->fetch_assoc()) {

       echo  '<a class="icon" title="' . $icon['title'] . '"href="' . $icon['adres'] . '"><img src="../images/' . $icon['icon'] . '"></a>';
       }
    ?>

    </div>
</div>

<div class=head-l>
    <div>
        <a class="linker" href="../index.html">HOME</a>
    </div>
</div>



?>


</body>
</html>
