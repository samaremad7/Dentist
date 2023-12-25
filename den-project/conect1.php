<?php

$conn= new mysqli('localhost', 'root', '', 'bookDB');
if(isset($_POST['Fullname']) && isset($_POST['age']) &&isset($_POST['maleORfemle'])
 &&isset( $_POST['phone']) && isset( $_POST['address']) && isset($_POST['jop'])
&&isset( $_POST['chief_complain'])&& isset($_POST['YESorNO1'])&&isset($_POST['what_is_it1'])
&&isset($_POST['YESorNO2'])&&isset( $_POST['what_is_it2'])&&isset($_POST['YESorNO3'])
&&isset( $_POST['date'])&& isset($_POST['time'])
   ){
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

mysqli_query($conn,"insert into tbook (Fullname ,age,maleORfemle,phone,address,jop,chief_complain,
                    YESorNO1, what_is_it1,YESorNO2,what_is_it2,YESorNO3,date,time)
                     value('$Fullname','$age','$maleORfemle','$phone','$address','$jop', '$chief_complain',
                     '$YESorNO1','$what_is_it1','$YESorNO2','$what_is_it2','$YESorNO3','$date','$time'  )");
echo "you book online successefully";
}

?>