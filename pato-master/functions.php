<?php
include('security.php');
// session_start();

$conn = mysqli_connect("localhost", "root", "", "restuarant");
if(isset($_POST['signup'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $sql = mysqli_query($conn, $query);


    header("Location: home.php");


}

if(isset($_POST['order'])){
    $food = $_POST['foodname'];
    $unit = $_POST['unit'];

    $query = "INSERT INTO `order` (`foodname`, `units`) VALUES ('$food', '$unit')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        $_SESSION['success'] = "Reservation Made";
        header("Location: menu.php");
    }else{
        $_SESSION['status'] = "Reservation Not Made";
        header("Location: ordernow.php");
    }
    // header("Location: ordernow.php");


}


if(isset($_POST['review'])){
    $food = $_POST['foodname'];
    $comments = $_POST['comments'];

    $query = "INSERT INTO `comments` (`foodname`, `comments`) VALUES ('$food', '$comments')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        $_SESSION['success'] = "Review Made";
        header("Location: menu.php");
    }else{
        $_SESSION['status'] = "Review Not Made";
        header("Location: review.php");
    }
    // header("Location: ordernow.php");


}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from users where email='$email' and password='$password' limit 1" or die("Failed" .mysqli_error($conn));
    
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($sql);

    if($row["email"] == $email && $row['password'] == $password){
        $_SESSION['email'] = $email;
        header("Location: home.php");
    }else{
        header("Location: incorrect.php");
    }
    
    
}

if(isset($_POST['reserve'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];

    $query = "INSERT INTO reserved (name, phone , email, date, time, people) VALUES ('$name', '$phone', '$email', '$date', '$time', '$people')";
    $sql = mysqli_query($conn, $query);

    if($sql){
        $_SESSION['success'] = "Reservation Made";
        header("Location: reservation_made.php");
    }else{
        $_SESSION['status'] = "Reservation Not Made... Try again";
        header("Location: reservation.php");
    }
    
    
    
}
?>