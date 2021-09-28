<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $source = $_POST['source'];

    //Database connection
    $conn = new mysqli('localhost','root','','marino_monterz');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(name, email, source)values(?, ?, ?)");
        $stmt->bind_param("sss",$name, $email, $source);
        $stmt->execute();
        echo "You have registered Successfully. Please find your pack here...";
        $stmt->close();
        $conn->close();
    }

?>