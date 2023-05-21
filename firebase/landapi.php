<?php
	$db = mysqli_connect("localhost", "root", "", "land");
    $place =$_POST['place'];
    $price =$_POST['price'];
    $area =$_POST['area'];
    $description =$_POST['description'];

    echo $area;
    $sql = "INSERT INTO  landdetails(place,price,area,description) VALUES ('$place','$price','$area','$description')";
try {
    if ($db->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        //echo "Error: ";
    }
} catch (Exception $e) {
    echo 'Message: ' . $e->getMessage();
}
?>

