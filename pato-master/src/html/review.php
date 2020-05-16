<?php
include("security.php");
include("header.php");
include("navbar.php");
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "restuarant");
?>
<div class="page-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                        <?php
         if(isset($_SESSION['success']) && $_SESSION['success'] != ''){
             echo '<h2 class="bg-primary text-white"> ' .$_SESSION['success']. '</h2>';
            //  echo $_SESSION['success'];
             unset($_SESSION['success']);
         }
         elseif(isset($_SESSION['status']) && $_SESSION['status'] != ''){
            echo '<h2 class="bg-danger text-white"> ' .$_SESSION['status']. '</h2>';
            // echo $_SESSION['status'];
            unset($_SESSION['status']);
        }
         ?>
         <br>
                        <?php
    $query = "SELECT * FROM menu";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){
       
        ?>
                            <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">ID
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Food Name
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Food Review</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Delete Review
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                        <?php echo $row['id']; ?>
                                        </td>
                                        <td class="border-top-0 px-2 py-4"><?php echo $row['foodname']; ?></td>
                                        <td class="border-top-0 px-2 py-4">
                                        <?php echo $row['comments']; ?>
                                        </td>
                                        <td> 
                    <form action="functions.php" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $row['ID']; ?>">
                    <button type="submit" name="delete_review" class="btn waves-effect waves-light btn-rounded btn-danger"> DELETE </button>
                    </form>
                </td>
                                    </tr>
                                    <?php
        }
        ?>
                                </tbody>
                            </table>
                            <?php
    }else{
        echo "No Record Found";
    }
    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    include("scripts.php")
    ?>