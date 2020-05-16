<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/jpg" href="images/icons/wazobia2.jpg"/>
    <title>Menu Details</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
        }

        body,
        div,
        form,
        input,
        select,
        textarea,
        label,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            font-size: 40px;
            color: #fff;
            z-index: 2;
            line-height: 83px;
        }

        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }

        form {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 8px #669999;
        }

        .banner {
            /* position: relative; */
            margin: 5px;
            /* border: 1px solid #ccc; */
            /* float: left; */
            width: 300px;
            text-align: center;
        }

        .banner::after {
            /* content: "";
      background-color: rgba(0, 0, 0, 0.3); 
      position: absolute;
      width: 100%;
      height: 100%; */
        }

        input,
        select,
        textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }

        input[type="date"] {
            padding: 4px 5px;
        }

        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .item:hover p,
        .item:hover i,
        .question:hover p,
        .question label:hover,
        input:hover::placeholder {
            color: #669999;
        }

        .item input:hover,
        .item select:hover,
        .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 3px 0 #669999;
            color: #669999;
        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        .item span {
            color: red;
        }

        .week {
            display: flex;
            justfiy-content: space-between;
        }

        .colums {
            float: right;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            flex-wrap: wrap;
        }

        .colums div {
            width: 48%;
        }

        input[type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        .item i,
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            font-size: 20px;
            color: #a3c2c2;
        }

        .item i {
            right: 1%;
            top: 30px;
            z-index: 1;
        }

        input[type=radio],
        input[type=checkbox] {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            margin: 5px 20px 15px 0;
            cursor: pointer;
        }

        .question span {
            margin-left: 30px;
        }

        .question-answer label {
            display: block;
        }

        label.radio:before {
            content: "";
            position: absolute;
            left: 0;
            width: 17px;
            height: 17px;
            border-radius: 50%;
            border: 2px solid #ccc;
        }

        input[type=radio]:checked+label:before,
        label.radio:hover:before {
            border: 2px solid #669999;
        }

        label.radio:after {
            content: "";
            position: absolute;
            top: 6px;
            left: 5px;
            width: 8px;
            height: 4px;
            border: 3px solid #669999;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type=radio]:checked+label:after {
            opacity: 1;
        }

        .flax {
            display: flex;
            justify-content: space-around;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #669999;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #a3c2c2;
        }

        @media (min-width: 568px) {

            .name-item,
            .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input,
            .name-item div {
                width: calc(50% - 20px);
            }

            .name-item div input {
                width: 97%;
            }

            .name-item div label {
                display: block;
                padding-bottom: 5px;
            }
        }
    </style>
</head>
<!-- <div class="page-wrapper"> -->

<body>
    <div class="logo">
                    <a href="home.php">
                        <img src="images/icons/wazobia2.jpg" alt="IMG-LOGO" data-logofixed="images/icons/wazobia2.jpg">
                    </a>
                </div>
    <div class="testbox">
        <?php
        $conn = mysqli_connect("localhost", "root", "", "restuarant");

        if (isset($_POST['order_btn'])) {
            $id = $_POST['order_id'];

            $query = "SELECT * FROM menu WHERE ID='$id'";
            $query_run = mysqli_query($conn, $query);

            // if (mysqli_num_rows($query_run) > 0) {
            foreach ($query_run as $row) {
        ?>


                <form action="functions.php" method="POST">
                    <div>
                        <h2 style="text-align:center;"><?php echo $row['foodname']; ?></h2>
                    </div>
                    <div class="banner">
                        <?php echo '<p style="text-align:center;"> <img src="image/' . $row['image'] . '" alt="Image" class="img-fluid" height="550" width="800" align="center" > </p>'; ?>
                    </div>
                    <!-- <div class="colums"> -->
                    <input type="hidden" name="foodname" value="<?php echo $row['foodname'] ?>" >
                        <div class="question">
                            <label>Price: $<?php echo $row['price']; ?></label>
                        </div>
                        <div class="question">
                            <label>Description: <?php echo $row['description']; ?></label>
                        </div>
            </br>

                        <div class="item">
          <p>Meal Quantity</p>
          <select name="unit">
            <option value="1" >One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
            <option value="5">Five</option>
            <option value="6">Six</option>
          </select>
        </div>
                    <!-- </div> -->
                    <div class="btn-block">
                    <a href="order.php" class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto">
                        <button type="submit" name="order">Order</button>
                    </a>
                    </div>
                    <div class="btn-block">
                    <!-- <a class="btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto" data-toggle="modal" data-target="#addFood">
                        <button type="submit" name="review">Review</button>
                    </a> -->
                    
                    <!-- </div> -->
                </form>
            <?php
            }
            ?>
        <?php
        } else {
            echo "No Record Found";
        }
        ?>
    </div>
</body>

</html>