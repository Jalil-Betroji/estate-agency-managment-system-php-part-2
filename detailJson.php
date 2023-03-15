<?php

require "connect.php";


if (isset($_GET["Announce_Info"])) {

    $Announce_ID = $_GET["Announce_Info"];

    $sql = "SELECT announces.Announce_ID, Client_ID, Title, Area, Rooms, Bathrooms, Price, Country, City, Code_Postal, House_Number, House_Floor, Type, Category, 
    (SELECT GROUP_CONCAT(Image_Path) FROM images WHERE Announce_ID = announces.Announce_ID) AS Image_Paths
FROM announces
WHERE Announce_ID = $Announce_ID";


    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $annonce = $stmt->fetch(PDO::FETCH_ASSOC);

    $annonce['Image_Paths'] = explode(',', $annonce['Image_Paths']);

    header('Content-Type: application/json');


    echo json_encode($annonce);

}

if (isset($_GET["More_Info"])) {

    $Announce_ID = $_GET["More_Info"];

    $sql = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,Bathrooms,Price,
    Country,City,Code_Postal,House_Number,House_Floor,Type,Category,Image_Path
    FROM `announces`  INNER JOIN images ON announces.Announce_ID = images.Announce_ID WHERE announces.Announce_ID = $Announce_ID ";

    // execute a query
    $statment = $conn->query($sql);

    // fetch all rows
    $annonce = $statment->fetch(PDO::FETCH_ASSOC);


    header('Content-Type: application/json');


    echo json_encode($annonce);

}

if (isset($_GET["delete_announce"])) {
    $Announce_ID = $_GET["delete_announce"];
    $sql = "SELECT * FROM `announces` WHERE Announce_ID = $Announce_ID";
    // execute a query
    $statment = $conn->query($sql);

    // fetch all rows
    $annonce = $statment->fetch(PDO::FETCH_ASSOC);
    header('Content-Type: application/json');
    echo json_encode($annonce);

}

?>