<?php
include("security.php");
include("header.php");
include("navbar.php");
?>
<!-- 

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->
<div class="page-wrapper">
<!-- Modal -->
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add admin data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="functions.php" method="POST">
        <div class="modal-body">
          <div class=form-group">
            <label> Fullname </label>
            <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname">
          </div>
        </div>
        <div class="modal-body">
          <div class=form-group">
            <label> Username </label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username">
          </div>
        </div>
        <div class="modal-body">
          <div class=form-group">
            <label> Email </label>
            <input type="text" name="email" class="form-control" placeholder="Enter Email">
          </div>
        </div>
        <div class="modal-body">
          <div class=form-group">
            <label> Password </label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" name="addadmin" class="btn btn-primary">Save</button>
    </div>
    </form>
  </div>
</div>



<!-- <div class="card shadow mb-4"> -->
<div class="card shadow mb-4">
        <div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary"> Admin Profile
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
      Add admin Profile
    </button>
  </h6>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
  <?php
  if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
    echo '<h2 class="bg-primary text-white"> ' . $_SESSION['success'] . '</h2>';
    //  echo $_SESSION['success'];
    unset($_SESSION['success']);
  } elseif (isset($_SESSION['status']) && $_SESSION['status'] != '') {
    echo '<h2 class="bg-danger text-white"> ' . $_SESSION['status'] . '</h2>';
    // echo $_SESSION['status'];
    unset($_SESSION['status']);
  }
  ?>
  <div class="table-responsive">
    <?php
    $query = "SELECT * FROM admins";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_num_rows($query_run) > 0) {

    ?>
      <table class="table no-wrap v-middle mb-0">
        <thead>
          <tr class="border-0">
            <th class="border-0 font-14 font-weight-medium text-muted">ID
            </th>
            <th class="border-0 font-14 font-weight-medium text-muted px-2">Admin Name
            </th>
            <th class="border-0 font-14 font-weight-medium text-muted">Admin Username</th>
            <th class="border-0 font-14 font-weight-medium text-muted">Admin Email</th>
            <th class="border-0 font-14 font-weight-medium text-muted text-center">
              Admin Password
            </th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($row = mysqli_fetch_assoc($query_run)) {
          ?>
            <tr>
              <td class="border-top-0 px-2 py-4">
                <?php echo $row['ID']; ?>
              </td>
              <td class="border-top-0 px-2 py-4"><?php echo $row['fullname']; ?></td>
              <td class="border-top-0 px-2 py-4">
                <?php echo $row['username']; ?>
              </td>
              <td>
                <?php echo $row['email']; ?></td>
              <td>
                <?php echo $row['password']; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    <?php
    } else {
      echo "No Record Found";
    }
    ?> </tbody>
    </table>
  </div>
</div>
<?php
include("footer.php");
include("scripts.php");
?>