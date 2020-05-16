<?php
include("security.php");
include("header.php");
include("navbar.php");
?>

<?php
$conn = mysqli_connect("localhost", "root", "", "restuarant");
?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning, <?php echo $_SESSION['email']; ?></h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
                <!-- *************************************************************** -->
                <!-- End Location and Earnings Charts Section -->
                <!-- *************************************************************** -->
                <!-- *************************************************************** -->
                <!-- Start Top Leader Table -->
                <!-- *************************************************************** -->
                <?php
    $query = "SELECT * FROM users";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0){
       
        ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
                                <thead>
                                    <tr class="border-0">
                                        <th class="border-0 font-14 font-weight-medium text-muted">ID
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted px-2">Username
                                        </th>
                                        <th class="border-0 font-14 font-weight-medium text-muted">Email</th>
                                        <th class="border-0 font-14 font-weight-medium text-muted text-center">
                                            Password
    </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
        while($row = mysqli_fetch_assoc($query_run)){
        ?>
                                    <tr>
                                        <td class="border-top-0 px-2 py-4">
                                        <?php echo $row['ID']; ?>
                                        </td>
                                        <td class="border-top-0 px-2 py-4"><?php echo $row['username']; ?></td>
                                        <td class="border-top-0 px-2 py-4">
                                        <?php echo $row['email']; ?>
                                        </td>
                                        <td class="border-top-0 px-2 py-4"><?php echo $row['password']; ?></td>
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
                <!-- *************************************************************** -->
                <!-- End Top Leader Table -->
                <!-- *************************************************************** -->
            </div>

<?php
include("footer.php");
include("scripts.php")
?>