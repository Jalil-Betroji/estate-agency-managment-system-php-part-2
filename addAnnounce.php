<?php
require 'connect.php';
session_start();
if (isset($_SESSION['email'])) {
  $clientEmail = $_SESSION['email'];
  $getClientID = "SELECT client_ID FROM `client` WHERE Email = '$clientEmail'";
  $clientIDArr = $conn->query($getClientID)->fetch();
  $client_ID = $clientIDArr['client_ID'];

  $annonce_Title = $_POST['announce_Title'];
  $announce_Area = $_POST['announce_Area'];
  $announce_Rooms = $_POST['announce_Rooms'];
  $announce_Bathrooms = $_POST['announce_Bathrooms'];
  $announce_Price = $_POST['announce_Price'];
  $announce_Country = $_POST['announce_Country'];
  $announce_City = $_POST['announce_City'];
  $postal_Code = $_POST['announce_code_postal'];
  $announce_HouseNumber = $_POST['announce_house_number'];
  $announce_HouseFloor = $_POST['announce_house_floor'];
  $announce_Type = $_POST['announce_Type'];
  $announce_Category = $_POST['announce_Category'];

  $sql = "INSERT INTO `announces` 
     (`Client_ID`, `Title`, `Area`, `Rooms`, `Bathrooms`,`Price`, `Country`, `City`, `Code_Postal`,
      `House_Number`, `House_Floor`,`Type`, `Category`,`Publication_date`) 
     VALUES 
     ('$client_ID', '$annonce_Title', '$announce_Area', '$announce_Rooms', '$announce_Bathrooms',
      '$announce_Price','$announce_Country','$announce_City','$postal_Code','$announce_HouseNumber',
      '$announce_HouseFloor','$announce_Type','$announce_Category',NOW())";
  // execute a query
  $statement = $conn->query($sql);

  $LAST_INSERT_ID = $conn->query("SELECT LAST_INSERT_ID()")->fetch(); {

    if (count($_FILES['image']['name']) <= 5) {

      //Use something similar before processing files.
      $files = array_filter($_FILES['image']['name']);
      // Count the number of images files in array
      $total_count = count($_FILES['image']['name']);
      // Loop through every file
      $imgRole = 1;
      for ($i = 0; $i < $total_count; $i++) {
        //The temp file path is obtained
        $tmpFilePath = $_FILES['image']['tmp_name'][$i];
        //A file path needs to be present
        if ($tmpFilePath != "") {
          //Setup our new file path
          $image_Path = $_FILES['image']['name'][$i];
          $newFilePath = "img/" . $image_Path;
          //File is uploaded to temp dir
          if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            //Other code goes here
            $insertImg = "INSERT INTO `images` 
                    (`Image_Path`, `Image_Type`, `Announce_ID`) 
                    VALUES 
                    ('$image_Path', $imgRole ,'$LAST_INSERT_ID[0]');";
            $imgRole = 0;
            // execute a query
            $statement = $conn->query($insertImg);
          }
        }
      }
    } else {
      echo "<script>alert('You can't enter more than 5 pictures')</>";
    }
  }

  header("Locaton: profile.php");
}
?>