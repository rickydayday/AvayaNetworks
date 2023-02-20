<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "avaya";
$conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  
  die("Connection failed: " . $conn->connect_error);
}



//file upload



//post metadata to table client

if(isset($_POST['submit'])) {

  //allow certain types of formats



$name = $_POST['username'];
$phone   = $_POST['phone'];
$email = $_POST['email'];
$avaya_extension = $_POST['extension'];
$avaya_mac = $_POST['mac'];
$avaya_ip =$_POST['ipaddress'];
$avaya_port = $_POST['port1'];
$switch_number = $_POST['switch'];
$switch_port = $_POST['port2'];
$department = $_POST['department'];
$date   = $_POST['date']; 


            
$query = "INSERT INTO staff (name, email, phone, avaya_extension, avaya_mac, avaya_ip, avaya_port, switch_number, switch_port, department, dor)
VALUES ('$name','$email','$phone', '$avaya_extension', '$avaya_mac', '$avaya_ip', '$avaya_port', '$switch_number', '$switch_port', '$department', '$date')";


$execute = mysqli_query($conn, $query);

$_SESSION['message']="You are now logged in"; 
$_SESSION['username']=$username;


echo '<script language="javascript">';
echo 'swal({
 
      title:"Registered Successfully",

      });                              
                                     ';
echo '</script>';
header("location: ./config/views/");


}



?>
