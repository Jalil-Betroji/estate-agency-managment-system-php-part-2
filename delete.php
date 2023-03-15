<?php
require 'connect.php';
$Announce_ID = $_GET['delete_id'];
$sql1 = "DELETE FROM `images` WHERE Announce_ID = :Announce_ID";
$sql2 = "DELETE FROM `announces` WHERE Announce_ID = :Announce_ID";
$stmt1 = $conn->prepare($sql1);
$stmt2 = $conn->prepare($sql2);
$stmt1->execute(['Announce_ID' => $Announce_ID]);
$stmt2->execute(['Announce_ID' => $Announce_ID]);

if ($stmt1->rowCount() > 0 && $stmt2->rowCount() > 0) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record";
}
    $Announce_ID = $_GET['delete_id'];
    $sql = "DELETE FROM `images` WHERE Announce_ID = '$Announce_ID'";
    $stm = "DELETE FROM `announces` WHERE Announce_ID = '$Announce_ID'";

    echo $Announce_ID;
    header("Location: myfullannouncelist.php");

?>