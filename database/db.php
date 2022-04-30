<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carwsh";



function createConnection()
{

    global $servername, $username, $password, $dbname;
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {

        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getcarwashtable()
{

    $conn = createConnection();
    //query to fetch data from carwashtable :)
    $sql2 = "SELECT * FROM carwashtable";
    $carwshtab =  $conn->query($sql2);

    closeConnection($conn);

    return $carwshtab;
}

function getlocations()
{

    $conn = createConnection();

    $sql2 = "SELECT * FROM locations";
    $locations =  $conn->query($sql2);

    closeConnection($conn);

    return $locations;
}

function getLoc()
{

    $conn = createConnection();

    $sql2 = "SELECT * FROM locations";
    $names = $conn->query($sql2);

    // $loca = $names->fetch_row()[1];


    closeConnection($conn);

    return $names;
}

//  function getUserFromId($id)
// {

//     $conn = createConnection();

//     $sql2 = "SELECT user_name FROM myhotel.users Where id=$id";
//     $user = $conn->query($sql2);

//     $resultstring = $user->fetch_row()[0];


//     closeConnection($conn);


//     return $resultstring;

// }

function getCarWashBooked()
{
    $conn = createConnection();

    $sql2 = "SELECT * FROM booking";
    $booked = $conn->query($sql2);
    closeConnection($conn);

    return $booked;
}


//  function deleteFood($id){

//     $conn = createConnection();

//     $sql2 ="delete * from booking where id = $id";
//  }



function closeConnection($conn)
{
    $conn->close();
}
?>