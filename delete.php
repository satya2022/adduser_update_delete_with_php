<?php

include'connect.php';
if (isset($_GET['deleteid'])) {
 $id = $_GET['deleteid'];

 $sql = "DELETE FROM `crud` where id=$id";
 $result = mysqli_query($conn,$sql);
}
if ($result) {
// echo "deleteed succesfully";
header("Location:display.php");
}
else {
   mysqli_error($conn);
}



?>