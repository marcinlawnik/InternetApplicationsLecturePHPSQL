<?php
include 'db.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 3;
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=$id";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record $id deleted successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>