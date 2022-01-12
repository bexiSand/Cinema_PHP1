<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biograf</title>
</head>
<body>

<h1>Biograf</h1>

<form action="four.php" method="post">

    <p>Välj film:</p>
        <select>
            <option value="trolls">Trolls 2: Världsturnén</option>
            <option value="big">Familjen Bigfoot</option>
            <option value="springs">Palm Springs</option>
            <option value="curie">Marie Curie Pionjär. Geni. Rebell</option>
        </select>
    </p>

</form>

</form>

<form action="four.php" method="post">
<p>Antal biljetter:</p>
<p><input type="text" name="biljetter" placeholder="Biljettpris 100 kr"></p>

<input type="submit" value="Köp">

</form>

<p><b>Att betala:</b></p>
<?php
$total = ($_POST['biljetter']* 100);
echo $total . " " . "kr";
?>
</body>
</html>

</body>
</html>