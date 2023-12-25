<?php
$Fullname = $_POST['Fullname'];
$age = $_POST['age'];
$maleORfemle = $_POST['maleORfemle'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$jop = $_POST['jop'];
$chief_complain = $_POST['chief_complain'];
$YESorNO1 = $_POST['YESorNO1'];
$what_is_it1 = $_POST['what_is_it1'];
$YESorNO2 = $_POST['YESorNO2'];
$what_is_it2 = $_POST['what_is_it2'];
$YESorNO3 = $_POST['YESorNO3'];
$date = $_POST['date'];
$time = $_POST['time'];

//database connection 
$conn = new mysqli('localhost', 'root', '', 'bookDB');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO Tbook (Fullname, age, maleORfemle, phone, address, jop, chief_complain, YESorNO1, what_is_it1, YESorNO2, what_is_it2, YESorNO3, data, time)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sisissssssssii", $Fullname, $age, $maleORfemle, $phone, $address, $jop, $chief_complain, $YESorNO1, $what_is_it1, $YESorNO2, $what_is_it2, $YESorNO3, $date, $time);
    $stmt->execute();
    echo "book online done successfully...";
    $stmt->close();
    $conn->close();
}
?>