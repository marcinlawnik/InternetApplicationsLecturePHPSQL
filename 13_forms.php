<html>
<body>

<form action="13_forms.php" method="post">
    Name: <input type="text" name="name"><br>
    <input type="submit">
</form>

<form action="13_forms.php" method="get">
    Name: <input type="text" name="names"><br>
    <input type="submit">
</form>


<?php
if(isset($_POST['name'])) {
    echo 'POST METHOD: Welcome ' .  $_POST["name"] . '<br>';
}
if(isset($_GET['name'])) {
    echo 'GET METHOD: Welcome ' .  $_GET["name"] . '<br>';
}
?>

</body>
</html>