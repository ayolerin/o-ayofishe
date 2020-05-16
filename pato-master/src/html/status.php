<?php
session_start();
include("header.php");
include("navbar.php");
?>
<!-- 

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->


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
        $connection = mysqli_connect("localhost", "root", "", "restuarant");
        $query = "SELECT * FROM users";
        $query_run = mysqli_query($connection, $query);
    ?>
    <table class="table table-bordered" id="dataTable" width="100%" cellspace="0">
        <thread>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Status</th>
                <th>Change Status</th>
            <tr>
        </thread>
        <tbody>
            <?php
            if(mysqli_num_rows($query_run) > 0){
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td> 
                    <?php 
                    if($row['status']==1){
                        echo "<p id=str".$row['ID'].">Active</p>";
                    }else{
                        echo "<p id=str".$row['ID'].">Not Active</p>";
                    }
                    ?>
                </td>
                <td> 
                   <select onchange="active_user(this.value, <?php echo $row['ID'];?>)">
                   <option value="1"> Activate User </option>
                   <option value="0"> De-activate User </option>
                </td>
            </tr>
            <?php
                }
            }
            else {
                echo "No Record Found";
            }
            ?>
        </tbody>
    </table>
</div>
<!-- </div> -->
</div>
<script type="text/javascript">
    function active_user(val, ID){
        $.ajax({
            type: 'post',
            url: 'changestatus.php',
            data:{val:val, ID:ID},
            success: function(result){
                if(result==1){
                    $('#str' +ID).html('Active');
                }else{
                    $('#str' +ID).html('Not Active');
                }
            }
        });
    }
</script>
<?php
include("footer.php");
include("scripts.php");
?>