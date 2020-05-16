<?php
include("security.php");
include("header.php");
include("navbar.php");
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "restuarant");
?>
<div class="page-wrapper">

    <!-- Modal -->
    <div class="modal fade" id="addFood" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add To Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="functions.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class=form-group">
                            <label> Food Name </label>
                            <input type="text" name="foodname" class="form-control" placeholder="Enter Food Name">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class=form-group">
                            <label> Description </label>
                            <input type="text" name="description" class="form-control" placeholder="Enter Description">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class=form-group">
                            <label> Price </label>
                            <input type="text" name="price" class="form-control" placeholder="Enter Price">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label> Food Image </label>
                            <input type="file" name="image" id="images" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="addfood" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> Menu
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addFood">
                    Add Food
                </button>
            </h6>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
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
  
                        <div class="table-responsive">
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
                                        <th class="border-0 font-14 font-weight-medium text-muted">Food Description</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Food Price
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Food Image
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Delete From Menu
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
                                        <?php echo $row['description']; ?>
                                        </td>
                                        <td class="border-top-0 px-2 py-4"><?php echo $row['price']; ?></td>
                                        <td><?php echo '<img src="../../image/'.$row['image'].'" width="100px;" height="100px;" alt="Image">';?></td>
                                        <td> 
                    <form action="functions.php" method="post">
                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="delete_menu" class="btn waves-effect waves-light btn-rounded btn-danger"> DELETE </button>
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