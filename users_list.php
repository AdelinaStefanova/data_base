<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
     <?php
     $sql = "SELECT * FROM `users`;";
     $res = $db->query($sql);
     while(($row = $res->fetch_array()) !== null){
          echo $row['id'], ". ", $row['username'], "<br>";
     }

     ?>
</body>
</html>