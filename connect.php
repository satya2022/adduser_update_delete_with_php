<?php
$host='localhost';
$user='root';
$password='';
$dbname='crudopration';
$conn=mysqli_connect($host,$user,$password,$dbname);
if(!$conn){
die("Could not connect todatabase".mysql_connect_error());

}
else{
   echo" connect successfully";
}



?>