<?php 

require "connect.php";


if(isset($_GET["Announce_Info"]) ){

$Announce_ID = $_GET["Announce_Info"];
    
    $sql = "SELECT * FROM `announces` WHERE Announce_ID = $Announce_ID " ;
    
    // execute a query
    $statment = $conn->query($sql);
    
    // fetch all rows
    $annonce = $statment->fetch(PDO::FETCH_ASSOC);


    header('Content-Type: application/json');


    echo json_encode($annonce);

}

if(isset($_GET["More_Info"]) ){

    $Announce_ID = $_GET["More_Info"];
        
        $sql = "SELECT * FROM `announces` WHERE Announce_ID = $Announce_ID " ;
        
        // execute a query
        $statment = $conn->query($sql);
        
        // fetch all rows
        $annonce = $statment->fetch(PDO::FETCH_ASSOC);
    
    
        header('Content-Type: application/json');
    
    
        echo json_encode($annonce);
    
    }

    if (isset($_GET["delete_announce"])) {
        $Announce_ID = $_GET["delete_announce"];
        $sql = "SELECT * FROM `announces` WHERE Announce_ID = $Announce_ID" ;
         // execute a query
         $statment = $conn->query($sql);
        
         // fetch all rows
         $annonce = $statment->fetch(PDO::FETCH_ASSOC);
        header('Content-Type: application/json');
        echo json_encode($annonce);
        
    }

?>