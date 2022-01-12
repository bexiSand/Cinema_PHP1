<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biograf</title>
</head>
<body>

<h1>Biograf</h1>

<form action="send.php" method="post">
<?php 
if ($_POST['age'] == "7") {
echo "<a href=four.php>Jag har målsman med mig</a><br><a href=two.php>Jag har inte målsman med mig</a>";
}
elseif ($_POST['age'] == "11") {
echo "<a href=six.php>Jag har målsman med mig</a><br><a href=four.php>Jag har inte målsman med mig</a>";
}
elseif ($_POST['age'] == "15") {
echo "<a href=six.php>Välj en film</a>";
}
?>
</body>
</html>