<?php
require "connect.php";

$titre = $_GET['Title'];
$area = $_GET['Area'];
$rooms = $_GET['Rooms'];
$bathroom = $_GET['Bathrooms'];
$price = $_GET['Price'];
$country = $_GET['Country'];
$city = $_GET['City'];
$code_postal = $_GET['code_postal'];
$house_number = $_GET['house_number'];
$house_floor = $_GET['house_floor'];
$type = $_GET['Type'];
$category = $_GET['Category'];
$id = $_GET['announce_id'];

$stmt = $conn->prepare("UPDATE announces 
    SET Title = ?, Area = ?, Rooms = ?, Bathrooms = ?, 
    Price = ?, Country = ?, City = ?, Code_Postal = ?, 
    House_Number = ?, House_Floor = ?, Type = ?, 
    Category = ?, last_modification_date = NOW()
    WHERE Announce_ID = ?");
$stmt->execute([
    $titre,
    $area,
    $rooms,
    $bathroom,
    $price,
    $country,
    $city,
    $code_postal,
    $house_number,
    $house_floor,
    $type,
    $category,
    $id
]);

header("location:profile.php");
?>