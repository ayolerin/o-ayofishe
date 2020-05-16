<?php
include('security.php');
$conn = mysqli_connect("localhost", "root", "", "restuarant");


if(isset($_POST['addfood'])){
    $foodname = $_POST['foodname'];
    $image = $_FILES['image']['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if(file_exists("../../image/" .$image)){   
        $store = $_FILES["image"]["name"];
        $_SESSION['status'] = "Image already exists. ' .$store. '"; 
        header("Location: menu.php");
    }else{
        $query = "INSERT INTO menu (`foodname`, `image`, `description`, `price`) VALUES ('$foodname', '$image', '$description', '$price')";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            move_uploaded_file($_FILES["image"]["tmp_name"], "../../image/" .$_FILES["image"]["name"]);
            $_SESSION['success'] = "Item Added";
            header("Location: menu.php");
        }else{
            $_SESSION['status'] = "Item Not Added";
            header("Location: menu.php");
        }
    }

   
}

if(isset($_POST['addadmin'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


        $query = "INSERT INTO admins (fullname, username, email, password) VALUES ('$fullname','$username', '$email', '$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            // echo "Saved"
            $_SESSION['success'] = "Admin profile added";
            header("Location: admin.php");
        }
        else{
            // echo "Not Saved";
            $_SESSION['status'] = "Admin profile not added";
            header("Location: admin.php");
        }
        

}

if(isset($_POST['delete_review'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM comments WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Your review is deleted";
        header('Location: review.php');
    }
    else{
        $_SESSION['status'] = "Your review is NOT deleted";
        header('Location: review.php');
    }
}

if(isset($_POST['delete_order'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `order` WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Your order is deleted";
        header('Location: order.php');
    }
    else{
        $_SESSION['status'] = "Your order is NOT deleted";
        header('Location: order.php');
    }
}

if(isset($_POST['delete_menu'])){
    $id = $_POST['delete_id'];
    $query = "DELETE FROM `menu` WHERE ID='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run){
        $_SESSION['success'] = "Your Menu Item is deleted";
        header('Location: menu.php');
    }
    else{
        $_SESSION['status'] = "Your Menu Item is NOT deleted";
        header('Location: menu.php');
    }
}


if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from admins where email='$email' and password='$password' limit 1" or die("Failed" .mysqli_error($conn));
    
    $sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($sql);

    if($row["email"] == $email && $row['password'] == $password){
        $_SESSION['email'] = $email;
        header("Location: index.php");
    }else{
        $_SESSION['status'] = "Incorrect Username/Password";
        header("Location: login.php");
    }
    
    
}
?>