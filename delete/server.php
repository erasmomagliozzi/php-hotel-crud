<?php
 include __DIR__ . '/../database.php';

 if (empty($_POST['id'])) {
   die('id non corretto');
 }
 $idRoom = $_POST['id'];



 $sql = "SELECT * FROM `stanze` WHERE `id`='$idRoom';";

  $result = $conn->query($sql);

  if ($result && $result->num_rows == 0) {
    die('Id non corretto');
  }



 $sql = "DELETE FROM `stanze` WHERE `id` = '$idRoom';";

 $result = $conn->query($sql);



  if($result) {
   // echo 'OK';
   header("Location: $basePath?roomNumber=$idRoom");
  } else {
    echo 'KO';
  }

  $conn->close();
