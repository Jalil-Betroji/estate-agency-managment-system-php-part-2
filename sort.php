<?php
require 'connect.php';
if(isset($_POST['Sell'])){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
    Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
    Image_Path
    FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID WHERE Category ='Sell'";

$statment = $conn->prepare($query);
$statment->execute();
$announces_List = $statment->fetchAll();
if ($announces_List > 0){
foreach($announces_List as $values){
?>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="property-item rounded overflow-hidden">
                 <div class="position-relative overflow-hidden">
                     <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                     <div
                         class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                         For <?php echo($values['Category']) ?>
                     </div>
                     <div
                         class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                         <?php echo($values['Type']) ?>
                     </div>
                 </div>
                 <div class="p-4 pb-0">
                     <h5 class="text-color mb-3"><?php echo($values['Price']) ?>$</h5>
                     <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                     <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                        <?php echo($values['Country']) ?></p>
                 </div>
                 <div class="d-flex border-top">
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                     <small class="flex-fill text-center py-2"><i
                             class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                 </div>
                 <button class="btn btn-primary w-100" data-bs-toggle="modal"
                     data-bs-target="#more_details_modal">More Details</button>
             </div>
         </div>
         <?php                         
         }
         }else{
             echo("hello jalil how are you");
         }
         ?>

         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
             <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
         </div>
     </div>
 </div>
</div>
</div>
</section>
<?php
}

if(isset($_POST['rent'])){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
    Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
    Image_Path
    FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID WHERE Category ='Rent'";

$statment = $conn->prepare($query);
$statment->execute();
$announces_List = $statment->fetchAll();
if ($announces_List > 0){
foreach($announces_List as $values){
?>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="property-item rounded overflow-hidden">
                 <div class="position-relative overflow-hidden">
                     <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                     <div
                         class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                         For <?php echo($values['Category']) ?>
                     </div>
                     <div
                         class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                         <?php echo($values['Type']) ?>
                     </div>
                 </div>
                 <div class="p-4 pb-0">
                     <h5 class="text-color mb-3"><?php echo($values['Price']) ?>$</h5>
                     <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                     <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                        <?php echo($values['Country']) ?></p>
                 </div>
                 <div class="d-flex border-top">
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                     <small class="flex-fill text-center py-2"><i
                             class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                 </div>
                 <button class="btn btn-primary w-100" data-bs-toggle="modal"
                     data-bs-target="#more_details_modal">More Details</button>
             </div>
         </div>
         <?php                         
         }
         }else{
             echo("hello jalil how are you");
         }
         ?>

         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
             <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
         </div>
     </div>
 </div>
</div>
</div>
</section>
<?php
}


if(isset($_POST['published_date'])){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
    Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
    Image_Path
    FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID ORDER BY Publication_date ASC";

$statment = $conn->prepare($query);
$statment->execute();
$announces_List = $statment->fetchAll();
if ($announces_List > 0){
foreach($announces_List as $values){
?>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="property-item rounded overflow-hidden">
                 <div class="position-relative overflow-hidden">
                     <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                     <div
                         class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                         For <?php echo($values['Category']) ?>
                     </div>
                     <div
                         class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                         <?php echo($values['Type']) ?>
                     </div>
                 </div>
                 <div class="p-4 pb-0">
                     <h5 class="text-color mb-3"><?php echo($values['Price']) ?>$</h5>
                     <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                     <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                        <?php echo($values['Country']) ?></p>
                 </div>
                 <div class="d-flex border-top">
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                     <small class="flex-fill text-center py-2"><i
                             class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                 </div>
                 <button class="btn btn-primary w-100" data-bs-toggle="modal"
                     data-bs-target="#more_details_modal">More Details</button>
             </div>
         </div>
         <?php                         
         }
         }else{
             echo("hello jalil how are you");
         }
         ?>

         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
             <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
         </div>
     </div>
 </div>
</div>
</div>
</section>
<?php
}


if(isset($_POST['price'])){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
    Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
    Image_Path
    FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID ORDER BY Price ASC ";

$statment = $conn->prepare($query);
$statment->execute();
$announces_List = $statment->fetchAll();
if ($announces_List > 0){
foreach($announces_List as $values){
?>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="property-item rounded overflow-hidden">
                 <div class="position-relative overflow-hidden">
                     <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                     <div
                         class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                         For <?php echo($values['Category']) ?>
                     </div>
                     <div
                         class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                         <?php echo($values['Type']) ?>
                     </div>
                 </div>
                 <div class="p-4 pb-0">
                     <h5 class="text-color mb-3"><?php echo($values['Price']) ?>$</h5>
                     <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                     <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                        <?php echo($values['Country']) ?></p>
                 </div>
                 <div class="d-flex border-top">
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                     <small class="flex-fill text-center py-2"><i
                             class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                 </div>
                 <button class="btn btn-primary w-100" data-bs-toggle="modal"
                     data-bs-target="#more_details_modal">More Details</button>
             </div>
         </div>
         <?php                         
         }
         }else{
             echo("hello jalil how are you");
         }
         ?>

         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
             <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
         </div>
     </div>
 </div>
</div>
</div>
</section>
<?php
}


if(isset($_POST['featured'])){

    $query = "SELECT announces.Announce_ID,Client_ID,Title,Area,Rooms,
    Bathrooms,Price,Country,City,Code_Postal,House_Number,House_Floor,Type,Category,
    Image_Path
    FROM announces INNER JOIN images ON announces.Announce_ID = images.Image_ID ";

$statment = $conn->prepare($query);
$statment->execute();
$announces_List = $statment->fetchAll();
if ($announces_List > 0){
foreach($announces_List as $values){
?>
<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
             <div class="property-item rounded overflow-hidden">
                 <div class="position-relative overflow-hidden">
                     <a href=""><img class="img-fluid" src="img/<?php echo($values['Image_Path']) ?>" alt=""></a>
                     <div
                         class="bg-color rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                         For <?php echo($values['Category']) ?>
                     </div>
                     <div
                         class="bg-white rounded-top text-color position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                         <?php echo($values['Type']) ?>
                     </div>
                 </div>
                 <div class="p-4 pb-0">
                     <h5 class="text-color mb-3"><?php echo($values['Price']) ?>$</h5>
                     <a class="d-block h5 mb-2" href=""><?php echo($values['Title']) ?></a>
                     <p><i class="fa fa-map-marker-alt text-color me-2"></i><?php echo($values['Code_Postal']) ?> ,<?php echo($values['City']) ?>-
                        <?php echo($values['Country']) ?></p>
                 </div>
                 <div class="d-flex border-top">
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-ruler-combined text-color me-2"></i><?php echo($values['Area']) ?> m2</small>
                     <small class="flex-fill text-center border-end py-2"><i
                             class="fa fa-bed text-color me-2"></i><?php echo($values['Rooms']) ?> Bed</small>
                     <small class="flex-fill text-center py-2"><i
                             class="fa fa-bath text-color me-2"></i><?php echo($values['Bathrooms']) ?> Bath</small>
                 </div>
                 <button class="btn btn-primary w-100" data-bs-toggle="modal"
                     data-bs-target="#more_details_modal">More Details</button>
             </div>
         </div>
         <?php                         
         }
         }else{
             echo("hello jalil how are you");
         }
         ?>

         <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
             <a class="btn btn-primary py-3 px-5" href="announces.php">Browse More Announces</a>
         </div>
     </div>
 </div>
</div>
</div>
</section>
<?php
}

?>