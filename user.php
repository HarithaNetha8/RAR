<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $zip = $_POST['zip'];
    $dob = $_POST['dob'];


    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname = "rent-a-ride";

$conn = new mysqli('$host','$dbusername','$dbpassword','$dbname');

    if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
    }
    
    else {
        $stmt = $conn->prepare("insert into userreg(First Name,Last Name,email,Password,Phone Number,Address,Zip Code,dob)
        values(?,?,?,?,?,?,?,?)");
        $stmt->blind_param("ssssisi,$firstName,$LastName,$email,$password,$phonenumber,$Address,$Zipcode");
        $stmt->execute();
        echo "registration successfully..";
        $stmt->close();
        $conn->close();
    }

}
?>