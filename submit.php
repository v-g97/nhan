<?php
    $x=$_POST['current'];
    $y=$_POST['voltage'];
    $z=$_POST['po'];

    $servername ="localhost";
    $username ="root";
    $password ="";
    $db ="testDB";

    //Create Connection to testDB
    $conn = new mysqli ($servername, $username, $password, $db);

    //Check connection
    if(mysqli_connect_error()){
        die("Connection failed: ".mysqli_connect_error());
    }
    echo"Connect successfully!";
    echo "<br>";

    //Insert data into table
    $sql ="INSERT INTO breaker1 (current, voltage, po)
    VALUE ($x,$y,$z) ";

    //Check if data were able to insert into table successfully
    if($conn->query($sql)==TRUE){
        echo "New data created successfully";
    } else {
        echo "Error " .$sql . "<br>" . $conn->error;
    }

    $sql = "SELECT current, voltage, po ";
    $result = $conn->query($sql);

    $conn->close();

?>
