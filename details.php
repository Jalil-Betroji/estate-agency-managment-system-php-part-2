<?php
require 'connect.php';
session_start();
if (isset($_GET["Announce_Info"])) {

    $Announce_ID = $_GET["Announce_Info"];

    $sqlAnnounce_ID = "SELECT * FROM announces WHERE Announce_ID = $Announce_ID";

    // execute a query
    $statment = $conn->query($sqlAnnounce_ID);

    // fetch all rows
    $annonce = $statment->fetch(PDO::FETCH_ASSOC);

    $sqlGetImages = "SELECT announces.Announce_ID, announces.Client_ID ,Title, Price, Publication_date, Type,
     Category, City, Code_Postal, images.Image_Path FROM announces JOIN images WHERE announces.Announce_ID = $Announce_ID 
     AND announces.Announce_ID = images.Announce_ID;";

    // execute a query
    $result = $conn->query($sqlGetImages);

    // fetch all rows
    $images = $result->fetchAll();
}
?>