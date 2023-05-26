<?php
 $billing_first_name = $_POST['billing_first_name'];
 $billing_last_name = $_POST['billing_last_name'];
 $billing_phone = $_POST['billing_phone'];
 $billing_email = $_POST['billing_email'];
 $billing_company = $_POST['billing_company'];

 //database connection 
$conn = new mysqli('localhost', 'root','','test');
if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
}else{
    $stmt = $conn-> prepare("insert into registration(billing_first_name,billing_last_name,billing_phone,billing_email,billing_company)
        values(?,?,?,?,?)");
    $stmt->bind_param("ssssi", $billing_first_name, $billing_last_name, $billing_email,$billing_company )
    $stmt-> execute();
    echo "registration succesfully..."
    $stmt-> close();
    $stmt-> close();
}
 ?>