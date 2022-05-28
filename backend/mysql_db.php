<?php



$con = new mysqli('localhost','root','qaqsqdqe','garden_db');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 


function CreateRewiewsTable($db){

    
    $sql_create_Rewiews = "
    
        CREATE TABLE IF NOT EXISTS Rewiews (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(30) NOT NULL,
            text TEXT(500) NOT NULL
            ) 
            
        ";

if ($db->query($sql_create_Rewiews) === TRUE) {
    echo "Table Rewiews created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

}


function SelectAllFromRewiews($db){


    $sql ="
        SELECT * FROM Rewiews;
    ";



    if ($res = $db->query($sql)) {
        print_r($res->fetchAll());
    } else {
        echo "Error creating table: " . $con->error;
    }

}


function InsertRewiwisRecord($con,$username,$text){


    $sql = "
        INSERT INTO Rewiews (username,text)
        VALUES ('$username','$text');
    ";

    if ($db->query($sql_create_Rewiews) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error creating table: " . $con->error;
    }


}




InsertRewiwisRecord($con,"Karl","Сайт очень крут");
// SelectAllFromRewiews($con);