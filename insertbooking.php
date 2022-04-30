<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("./database/db.php");


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "carwsh";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn == false) {
    die("ERROR : could not connect. "
        . mysqli_connect_error());
}

//create a variable in string
$toReturn = "NOT Added";


if (isset($_POST["name"])) {




    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $package_id = $_POST["package_id"];
    $locations_id = $_POST["locations_id"];
    $date = $_POST["date"];
    $message = empty($_POST["message"]);

  
    
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $surname = htmlspecialchars($_POST['surname'], ENT_QUOTES);
    $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $message = htmlspecialchars($_POST['message'], ENT_QUOTES);


    // Validate email adress
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $toReturn = 'Email is not valid!';
    }
    // First name must contain only alphabet characters.
    if (!preg_match('/^[a-zA-Z]+$/', $name)) {
        $toReturn = 'First name must contain only characters!';
    }
    // Last name must contain only alphabet characters.
    if (!preg_match('/^[a-zA-Z]+$/', $surname)) {
        $toReturn = 'Last name must contain only characters!';
    }
   



    // First name must contain only alphabet characters.




    $sql = "INSERT INTO booking (   name , surname , phone , email , package_id ,locations_id , date , message ) VALUES
        (  '$name', '$surname' , '$phone' , '$email' , '$package_id' , '$locations_id' , '$date' , '$message')";

    if (mysqli_query($conn, $sql)) {
        $toReturn =  
            '<div class=" container mt-3 card text-center" style="width: 18rem;">
                <img src="https://cdn.pixabay.com/photo/2016/04/15/11/48/hotel-1330850__480.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title"> Surname: '.$surname.'</h5>
                <h5 class="card-title"> Email : '.$email.'</h5>





                    <p class="card-text">Reservation has been Booked successfully</p>';

                                         header("location: thankyou.php");
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }



    //close connection
    mysqli_close($conn);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstrap link -->

    <title>Document</title>
    <div class="container">
        <?php

        echo $toReturn;




        ?>
    </div>



</head>

<body>

</body>

</html>